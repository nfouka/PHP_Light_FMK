<?php



use Symfony\Component\Routing;


$routes = new Routing\RouteCollection();
$routes->add('app1', new Routing\Route('/AppController/index/{year}', [
    'year' => null,
    '_controller' => '\Bundles\AppBundle\Controller\AppController::index'
]));

$routes->add('home', new Routing\Route('/AppController/home', [
    'year' => "nadir fouka",
    '_controller' => '\Bundles\AppBundle\Controller\AppController::index'
]));



return $routes;