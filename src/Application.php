<?php
namespace PlatziPHP;

use Illuminate\Http\Request;
use Illuminate\Container\Container;
use Illuminate\Routing\Router;
use Illuminate\Events\Dispatcher;
use PlatziPHP\Http\Controllers\HomeController;
use PlatziPHP\FakeDatabase;

class Application
{
    /**
    *   @type Container
    */
    private $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function run()
    {
        $router = new Router(
            new Dispatcher($this->container),
            $this->container
        );

        $router->get('/', HomeController::class . '@index');
        $router->get('/post/{id}', HomeController::class . '@show');

        $response = $router->dispatch(Request::capture());

        $response->send();
    }
}