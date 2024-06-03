<?php

namespace core;

class Router {
    private $routes = [
        '' => 'PostController@index',
        'post/create' => 'PostController@create',
        'post/store' => 'PostController@store',
        'post/edit' => 'PostController@edit',
        'post/update' => 'PostController@update',
        'post/delete' => 'PostController@delete',
        'post/show' => 'PostController@show',
    ];

    public function run() {
        $uri = trim($_SERVER['REQUEST_URI'], '/');
        if (array_key_exists($uri, $this->routes)) {
            $action = $this->routes[$uri];
            list($controller, $method) = explode('@', $action);
            require_once 'controllers/' . $controller . '.php';
            $controller = new $controller;
            $controller->$method();
        } else {
            echo "404 Not Found";
        }
    }
}
?>
