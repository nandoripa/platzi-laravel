<?php

class UserTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    function it_should_be_able_to_construct()
    {
        $user = new \PlatziPHP\User('fake.email@foo.dev', 'aPassword');
        $this->assertInstanceOf(\PlatziPHP\User::class, $user);
    }

    /**
     * €@test
     */
    function it_should_have_a_first_name() {

        $user = new \PlatziPHP\User('fake.email@foo.dev', 'aPassword');

        $user->setFirstName('aFirstName');
        $firstName = $user->getFirstName();


        $this->assertEquals('aFirstName',$firstName);
    }

    /**
     * €@test
     */
    function it_should_have_a_last_name() {

        $user = new \PlatziPHP\User('fake.email@foo.dev', 'aPassword');

        $user->setLastName('aLastName');
        $lastName = $user->getLastName();

        $this->assertEquals('aLastName',$lastName);
    }
}