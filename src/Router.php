<?php

namespace Blog\src;

class Router
{
    public Request $request;
    protected array $routes = [];

    public function __construct(Request $request) 
    {
        $this->request = $request;
    }
    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        if ($callback === false) {
            return "Not Found";
        }

        if (is_string($callback)) {
            return $this->renderView($callback);
        }
        // echo "<pre>";
        // var_dump($callback);
        // echo "</pre>";
        // exit;
        return call_user_func($callback);
    }

    public function renderView($view)
    {
        include_once APP_ROOT . "/views/{$view}.php";
    }
}