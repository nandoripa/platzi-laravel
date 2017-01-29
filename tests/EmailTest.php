<?php

use PlatziPHP\Email;

class EmailTest extends PHPUnit_Framework_TestCase
{

    function test_email_is_valid()
    {
        $email = new Email('fake.email@foo.dev');

        $this->assertInstanceOf(Email::class,$email);
    }

    function test_email_is_invalid()
    {
        $this->setExpectedException(InvalidArgumentException::class);

        $email = new Email('fake.email@foo');
    }

}
