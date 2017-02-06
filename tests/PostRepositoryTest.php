<?php

use Illuminate\Support\Collection;
use PlatziPHP\Domain\EntityNotFound;
use PlatziPHP\Domain\Post;
use PlatziPHP\Infrastructure\PostRepository;

class PostRepositoryTest extends PHPUnit_Framework_TestCase
{

    function test_all_posts()
    {
        $posts = new PostRepository();
        $result = $posts->all();

        $this->assertInstanceOf(Collection::class, $result);

        foreach ($result as $post)
        {
            $this->assertInstanceOf(Post::class, $post);
        }
    }

    function test_find_a_post_by_id()
    {
        $posts = new PostRepository();
        $post = $posts->find(1);

        $this->assertInstanceOf(Post::class, $post);
    }

    function test_fail_to_find_a_post_by_id()
    {
        $this->setExpectedException(EntityNotFound::class);

        $posts = new PostRepository();
        $posts->find(4566);
    }

    function test_searching_posts()
    {
        $posts = new PostRepository();
        $result = $posts->search('thirda');

        $this->assertInstanceOf(Collection::class, $result);

        foreach ($result as $post)
        {
            $this->assertInstanceOf(Post::class, $post);
        }
    }
}
