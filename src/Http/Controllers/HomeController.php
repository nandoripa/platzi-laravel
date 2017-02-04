<?php
namespace PlatziPHP\Http\Controllers;

use Illuminate\Http\Request;
use PlatziPHP\Http\Views\View;
use PlatziPHP\Infrastructure\FakeDatabase;

class HomeController
{

    /**
    *   @type FakeDatabase
    */
    private $fakeDb;

    public function __construct(FakeDatabase $fakeDb)
    {
        $this->fakeDb = $fakeDb;
    }

    public function index(Request $request)
    {
        $posts = $this->fakeDb->posts();
        $firstPost = $posts->first();

        $view = new View('home',[
            'posts' => $posts,
            'firstPost' => $firstPost
        ]);
        
        return $view->render();
    }

    public function show($id)
    {
        $posts = $this->fakeDb->posts();

        $view = new View('post_details',[
            'post' => $posts->get($id)
        ]);

        return $view->render();
    }
}