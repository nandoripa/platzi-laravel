<?php


class PostTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    function it_gives_us_the_author_name()
    {
        $author = new \PlatziPHP\Author('anemail@foo.dev','aPassword');

        $author->setName('Fernando','Rivas');

        $post = new \PlatziPHP\Post($author, 'A title', 'A post body');

        $this->assertEquals('by Fernando',$post->getAuthor());


    }
}
