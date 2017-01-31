<?php
namespace PlatziPHP\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use PlatziPHP\Http\Views\View;

class HomeController
{
    public function index(Request $request)
    {
        $view = new View('home',[
            'message' => 'Hello from a view!!!'
        ]);
        
        $response = $view->render();

        $response->send();
    }
}