<?php
namespace PlatziPHP\Infrastructure;

use Illuminate\Support\Collection;
use PlatziPHP\Domain\Author;
use PlatziPHP\Domain\Post;

class Postrepository
{
    /**
    *   @return Collection
    */
    public function posts()
    {
        $author = new Author('nandoripa@gmail.com','aPassword');
        $author->setName('Fernando','Rivas');

        return new Collection([
            1=> new Post($author,'My first post','This is the first post.'),
            2=> new Post($author,'My second post','This is the second post.'),
            3=> new Post($author,'My third post','This is the third post.'),
            4=> new Post($author,'My fourth post','This is the fourth post.'),
            5=> new Post($author,'My fifth post','This is the fifth post.')
        ]);
    }
}