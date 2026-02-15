<?php

namespace App\Core;

class Router
{
    protected array $routes = [];

    public function get($uri, $action)
    {
        $this->addRoute('GET', $uri, $action);
    }

    protected function addRoute($method, $uri, $action)
    {
        $this->routes[$method][] = [
            'uri' => $uri,
            'action' => $action
        ];
    }

    public function dispatch()
    {
        $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $requestUri = rtrim($requestUri, '/') ?: '/';
        $method = $_SERVER['REQUEST_METHOD'];

        foreach ($this->routes[$method] ?? [] as $route) {

            $pattern = preg_replace('#\{[a-zA-Z]+\}#', '([^/]+)', $route['uri']);
            $pattern = "#^" . rtrim($pattern, '/') . "$#";

            if (preg_match($pattern, $requestUri, $matches)) {

                array_shift($matches);

                [$controller, $method] = explode('@', $route['action']);

                $controller = 'App\\Controllers\\' . $controller;

                if (!class_exists($controller)) {
                    http_response_code(404);
                    die('Controller not found');
                }

                $controller = new $controller;

                if (!method_exists($controller, $method)) {
                    http_response_code(404);
                    die('Method not found');
                }

                return call_user_func_array([$controller, $method], $matches);
            }
        }

        http_response_code(404);
        echo "404";
    }
}
