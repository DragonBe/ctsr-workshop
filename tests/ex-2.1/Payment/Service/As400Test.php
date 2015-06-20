<?php

class Payment_Service_As400Test extends PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        $line = '401341345;2015-05-24 09:53;BE93522511513933;3449,99;PAYMENT INVOICE 2015000345123';
        if ($fh = fopen(__DIR__ . DIRECTORY_SEPARATOR . '_files/data.csv', 'w')) {
            fwrite($fh, $line, strlen($line));
            fclose($fh);
        }
    }

    /**
     * @covers Payments_Service_As400::processBankPayments
     */
    public function testProcessingBankPayments()
    {
        $contact = $this->getMock(
            'Contact_Model_Contact',
            array ('getContactId', 'getName')
        );
        $contact->expects($this->any())
            ->method('getContactId')
            ->will($this->returnValue(1));
        $contact->expects($this->any())
            ->method('getName')
            ->will($this->returnValue('Foo Bar'));
        $contactMapper = $this->getMock('Contact_Model_Mapper_Contact',
            array ('findContactByBankAccount')
        );
        $contactMapper->expects($this->any())
            ->method('findContactByBankAccount')
            ->will($this->returnValue($contact));
        $paymentsMapper = $this->getMock('Invoice_Model_Mapper_Payments',
            array ('updatePayment')
        );

        $logMock = new Zend_Log_Writer_Mock();
        $logger = new Zend_Log();
        $logger->setWriter($logMock);
        $logger->setPriority(Zend_Log::DEBUG);

        $as400 = new Payments_Service_As400();
        $as400->addMapper($contactMapper, 'Contact_Model_Mapper_Contact')
            ->addMapper($paymentsMapper, 'Invoice_Model_Mapper_Payments')
            ->setPath(__DIR__ . DIRECTORY_SEPARATOR . '_files')
            ->setLogger($logger);

        $as400->processBankPayments();
        $this->assertCount(3, $logMock->events);
        $this->assertEquals('Processing 401341345', $logMock->events[1]);
        $this->assertEquals(
            'Found contact "Foo Bar" for bank account BE93522511513933',
            $logMock->events[2]
        );
    }
}