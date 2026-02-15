<?php

namespace App\Core;

use App\Controllers\Error;

class App
{
    protected $routes = [];
    protected $params = [];

    public function __construct()
    {
        $this->registerRoutes();
        $this->handleRequest();
    }

    protected function registerRoutes()
    {
        $routeFile = __DIR__ . '/../../routes/web.php';
        if (!file_exists($routeFile)) {
            $this->triggerError(500, 'Route file not found.');
        }

        $this->routes = require $routeFile;
    }

    protected function handleRequest()
    {
        $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $requestUri = rtrim($requestUri, '/') ?: '/';
        $requestMethod = $_SERVER['REQUEST_METHOD'];

        $route = $this->matchRoute($requestMethod, $requestUri);

        if (!$route) {
            if ($requestUri === '/' && isset($this->routes['default'])) {
                $route = $this->routes['default'];
            } else {
                $this->triggerError(404);
            }
        }

        if (is_string($route)) {
            $route = ['action' => $route, 'protected' => false];
        }

        if (!empty($route['protected']) && !$this->isLoggedIn()) {
            header('Location: /auth/login');
            exit;
        }

        if (!isset($route['action']) || !str_contains($route['action'], '@')) {
            $this->triggerError(500, "Invalid route action format.");
        }

        [$controllerName, $methodName] = explode('@', $route['action']);
        $controllerClass = 'App\\Controllers\\' . $controllerName;

        if (!class_exists($controllerClass)) {
            $this->triggerError(500, "Controller not found: {$controllerClass}");
        }

        $controller = new $controllerClass;

        if (!method_exists($controller, $methodName)) {
            $this->triggerError(500, "Method not found: {$methodName}");
        }

        call_user_func_array([$controller, $methodName], []);
    }

    protected function matchRoute($method, $uri)
    {
        return $this->routes[$method][$uri] ?? null;
    }

    protected function isLoggedIn(): bool
    {
        return isset($_SESSION['user_id']);
    }

    protected function triggerError(int $code = 500, string $message = null)
    {
        $errorControllerClass = Error::class;
        if (class_exists($errorControllerClass)) {
            $errorController = new $errorControllerClass();
            if ($message && $code === 500) {
                $errorController->displayError($code, $message);
            } else {
                $errorController->displayError($code);
            }
        } else {
            http_response_code($code);
            echo $message ?? "Error {$code} occurred.";
        }
        exit;
    }
}
