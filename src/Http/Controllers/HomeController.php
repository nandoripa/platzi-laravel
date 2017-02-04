<?php
namespace PlatziPHP\Http\Controllers;

use Illuminate\Http\Request;
use PlatziPHP\Domain\Imprint;
use PlatziPHP\Http\Views\View;

class HomeController
{

    /**
     * @type Imprint
     */
    private $imprint;

    public function __construct(Imprint $imprint)
    {
        $this->imprint = $imprint;
    }

    public function index(Request $request)
    {
        $posts = $this->imprint->listPublishedPosts();
        $firstPost = $posts->first();

        $view = new View('home',[
            'posts' => $posts,
            'firstPost' => $firstPost
        ]);
        
        return $view->render();
    }

    public function show($id)
    {
        $posts = $this->imprint->listPublishedPosts();

        $view = new View('post_details',[
            'post' => $posts->get($id)
        ]);

        return $view->render();
    }
}