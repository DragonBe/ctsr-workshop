<?php

include_once __DIR__ . '/../../src/ex-2.0/ModuleManager.php';

class ModuleManagerTest extends \PHPUnit_Framework_TestCase
{
protected function tearDown()
{
    ModuleManager::$modules_install = array ();
}
/**
 * @covers ModuleManager::include_install
 */
public function testModuleManagerCanLoadMailModule()
{
    $result = ModuleManager::include_install('Mail');
    $this->assertTrue($result);
}

    /**
     * @covers ModuleManager::include_install
     */
    public function testReturnImmediatelyWhenModuleAlreadyLoaded()
    {
        $module = 'Foo_Bar';
        ModuleManager::$modules_install[$module] = 1;
        $result = ModuleManager::include_install($module);
        $this->assertTrue($result);
        $this->assertCount(1, ModuleManager::$modules_install);
    }

    /**
     * @covers ModuleManager::include_install
     */
    public function testReturnWhenModuleIsNotFound()
    {
        $module = 'Foo_Bar';
        $result = ModuleManager::include_install($module);
        $this->assertFalse($result);
        $this->assertEmpty(ModuleManager::$modules_install);
    }

    /**
     * @covers ModuleManager::include_install
     * @expectedException \PHPUnit_Framework_Error
     */
    public function testTriggerErrorWhenInstallClassDoesNotExists()
    {
        $module = 'IClient';
        $result = ModuleManager::include_install($module);
        $this->fail('Expecting loading module EssClient would trigger and error');
    }
}