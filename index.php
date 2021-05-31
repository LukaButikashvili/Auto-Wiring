<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

//print LoggingController::class; Training\Controller\LoggingController


require_once 'vendor/autoload.php';
require_once 'lib/argumentResolver/ArgumentResolver.php';

use Resolver\ArgumentResolver;

$routes = [
    '/log-message' => '\Training\Controller\LoggingController:logMessage'
]; 


if (isset($_SERVER['PATH_INFO'])) {
    $path = $_SERVER['PATH_INFO'];

    $route = $routes[$path];
    [$className, $method] = explode(':', $route);

    $print_methods = new ArgumentResolver($className, $method);



}























// $dependent_objects = resolve_constructor_arguments($className);
// $controller = new $className(...$dependent_objects);

// $controller->$method();

// function resolve_constructor_arguments(string $className) {

//     $reflection = new ReflectionClass($className);
//     $constructor_parameters = $reflection->getConstructor()->getParameters();
    
//     $class = $constructor_parameters;  //gets namespace for fileJson "Omedia\files\FileJson"
//     $objects = [];
//     foreach($constructor_parameters as $parameter) {
//         $class = $parameter->getClass()->getName();
//         $objects[] = new $class();
//     }

//     return $objects;
// }