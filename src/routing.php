<?php


// example.com/src/app.php
use Symfony\Component\Routing;


$routes =             new Routing\RouteCollection();

$routes->add('leap_year', new Routing\Route('/is_leap_year/{param1}', [
    'param1' => null, 
    '_controller' => 'Controller\LeapYearController::index',
]));

$routes->add('hello', new Routing\Route('/hello/{name}', [
    'name' => null , 
    '_controller' => 'Controller\LeapYearController::hello',
]));

$routes->add('bye', new Routing\Route('/bye', [
    '_controller' => 'Controller\LeapYearController::bye',
]));

$routes->add('home', new Routing\Route('/home', [
    '_controller' => 'Controller\LeapYearController::home',
]));

return $routes;


