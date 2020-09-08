<?php


// example.com/src/app.php
use Symfony\Component\Routing;

function is_leap_year($year = null) {
    if (null === $year) {
        $year = date('Y');
    }
    return 0 === $year % 400 || (0 === $year % 4 && 0 !== $year % 100);
}

$routes =             new Routing\RouteCollection();
$routes->add('hello', new Routing\Route('/hello/{name}', ['name' => 'World']));
$routes->add('bye',   new Routing\Route('/bye'));
$routes->add('index',   new Routing\Route('/index'));


$routes->add('leap_year', new Routing\Route('/is_leap_year/{param1}', [
    'param1' => null, 
    '_controller' => 'Controller\LeapYearController::index',
]));


return $routes;


