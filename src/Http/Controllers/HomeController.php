<?php
namespace PlatziPHP\Http\Controllers;

use Illuminate\Http\Request;

class HomeController
{
    public function index(Request $request)
    {
        return 'Hello at ' .
        $request->getRequestUri() .
        ' from Controller';
    }
}