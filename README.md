# Create, Test, Secure, Repeat

This is the accompanying source code for the workshop "Create, Test, Secure, Repeat".

## Requirements

In order to participate in this workshop, you should have the following installed

- [PHP] version 5.3.0 or higher or [HHVM] 3.5.0 or higher
- [GIT]

Hands-on knowledge of [PHP] and [GIT] are required to participate in this workshop.

## Quality Verification

[![Build Status](https://status.continuousphp.com/git-hub/in2it/ctsr-workshop?token=076cf217-6df2-4d22-b325-0648eb5a97b1&branch=master)](https://continuousphp.com/git-hub/in2it/ctsr-workshop)

## Installation of source code

Clone the repository into your workspace before attending the workshop.

    git clone https://github.com/in2it/ctsr-workshop.git
    cd ctsr-workshop/

Once you have cloned the training package, make sure you install composer.

    curl -sS https://getcomposer.org/installer | php

When the download is done, install required components using composer

    php composer.phar install

## Workshop

During the workshop you're asked to solve several exercises. All example codes are based on a UNIX-like OS, so if you plan to participate this workshop with another OS, you need to know what changes are required to have the exercises run on your operating system.

The exercises, the source code and the examples are tested on the following platforms:

- Windows 7
- Mac OS X
- Ubuntu Linux

When you need to switch to a specific exercise branch (e.g. ex-0.0), you can do this with the following command.

    git checkout -b ex-0.0 origin/ex-0.0


## Licence

The source code presented here in this repository is for educational purposes only. The source code is licenced [MIT](http://opensource.org/licenses/MIT) and free to use. The workshop material is available under a Creative Commons Attribution-ShareAlike 4.0 International license by [in2it vof](http://www.in2it.be). See the [LICENCE](LICENCE) document for more details.

[PHP]:http://php.net
[HHVM]:http://hhvm.com
[GIT]:http://git-scm.org
