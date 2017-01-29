<?php

class AuthorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    function it_should_construct()
    {
        $author = new \PlatziPHP\Author('anemail@foo.dev','aPassword');

        $this->assertInstanceOf(\PlatziPHP\Author::class, $author);
    }
}