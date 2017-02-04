<?php

use PlatziPHP\Domain\Author;

class AuthorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    function it_should_construct()
    {
        $author = new Author('anemail@foo.dev','aPassword');

        $this->assertInstanceOf(Author::class, $author);
    }
}