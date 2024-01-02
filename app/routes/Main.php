<?php
namespace MyApp\routes;

use MyApp\Core\Session;
use MyApp\Core\ValidationException;
use MyApp\Core\HandyFunctions;

session_start();

const BASE_PATH = __DIR__ . '/../../';

require BASE_PATH . 'vendor/autoload.php';


use MyApp\routes\Router;

$router = new Router();

require BASE_PATH . 'app/Core/HandyFunctions.php';
require 'routes.php';


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

try {
    $router->route($uri, $method);
} catch (ValidationException $exception) {
    Session::flash('errors', $exception->errors);
    Session::flash('old', $exception->old);

    return HandyFunctions::redirect($router->previousUrl());
}

Session::unflash();



