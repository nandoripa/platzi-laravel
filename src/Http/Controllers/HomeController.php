<?php
namespace PlatziPHP\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use PlatziPHP\Http\Views\View;
use PlatziPHP\Author;
use PlatziPHP\Post;

class HomeController
{
    public function index(Request $request)
    {

        $author = new Author('nandoripa@gmail.com','aPassword');
        $author->setName('Fernando','Rivas');

        $posts = [
            new Post($author,'My first post','This is the first post.'),
            new Post($author,'My second post','This is the second post.'),
            new Post($author,'My third post','This is the third post.'),
            new Post($author,'My fourth post','This is the fourth post.')
        ];

        $view = new View('home',[
            'posts' => $posts
        ]);
        
        $response = $view->render();

        $response->send();
    }
}