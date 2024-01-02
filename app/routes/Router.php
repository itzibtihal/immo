<?php

namespace MyApp\routes;

use \MyApp\Core\HandyFunctions;

class Router {
    private $routes = [];

    

    public function add($method, $uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method
        ];
        return $this;
    }

    public function get($uri, $controller)
    {
        $this->add('GET', $uri, $controller);
    }

    public function post($uri, $controller)
    {
        $this->add('POST', $uri, $controller);
    }

    public function route($uri, $method)
    {
        HandyFunctions::setBasePath(BASE_PATH); // Set the base path

        // Trim leading and trailing slashes from URI
        $trimmedUri = trim($uri, '/');

        foreach ($this->routes as $route) {
            $trimmedRouteUri = trim($route['uri'], '/');

            if (strpos($trimmedUri, $trimmedRouteUri) === 0 && $route['method'] === strtoupper($method)) {

                // Convert controller format to a valid class name
                $controllerParts = explode('.', $route['controller']);
                $controllerClassName = $controllerParts[0];
                $controllerFilePath = $controllerClassName . '.php';

                require_once __DIR__ . '/../Controllers/' . $controllerFilePath;

                return;
            }
        }

        $this->abort();
    }


    public function previousUrl()
    {
        return $_SERVER['HTTP_REFERER'];
    }

    protected function abort($code = 404)
    {
        http_response_code($code);
        require_once HandyFunctions::base_path("View/{$code}.php");
        die();
    }
}
