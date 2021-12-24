<?php


require_once __DIR__.'/../vendor/autoload.php';

use Bundles\AppBundle\EventListener\GoogleListener;
use Core\Event\ResponseEvent;
use Core\Framework;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel;
use Symfony\Component\Routing;



$request = Request::createFromGlobals();
$routes = include __DIR__.'/../src/app.php';
$dispatcher = new EventDispatcher();

$dispatcher->addListener(ResponseEvent::EVENT_NAME , array(new GoogleListener() , 'onResponse' ) , 1 ) ;


$context = new Routing\RequestContext();
$matcher = new Routing\Matcher\UrlMatcher($routes, $context);

$controllerResolver = new HttpKernel\Controller\ControllerResolver();
$argumentResolver = new Symfony\Component\HttpKernel\Controller\ArgumentResolver();

$framework = new Framework($matcher, $controllerResolver, $argumentResolver , $routes , $dispatcher);
$response = $framework->handle($request);


$response->send();

