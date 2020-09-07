<?php


// example.com/src/app.php
use Symfony\Component\Routing;

$routes =             new Routing\RouteCollection();
$routes->add('hello', new Routing\Route('/hello/{name}', ['name' => 'World']));
$routes->add('bye',   new Routing\Route('/bye'));
$routes->add('index',   new Routing\Route('/index'));

return $routes;
