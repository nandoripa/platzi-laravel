<?php


use PlatziPHP\Domain\Author;
use PlatziPHP\Domain\Post;

class PostTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    function it_gives_us_the_author_name()
    {
        $author = new Author('anemail@foo.dev','aPassword');

        $author->setName('Fernando','Rivas');

        $post = new Post($author, 'A title', 'A post body');

        $this->assertEquals('Fernando',$post->getAuthor());


    }
}
