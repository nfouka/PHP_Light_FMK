<?php 


require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel;
use Symfony\Component\Routing;
use Symfony\Component\Dotenv\Dotenv;
use Core\Framework  ; 
use Symfony\Component\EventDispatcher\EventDispatcher;
use Event\ResponseEvent as ResponseEvent ;
use Listenner\MyListenner1;
use Listenner\MyListenner2;




$dispatcher = new EventDispatcher();
$dispatcher->addListener( ResponseEvent::NAME , [new MyListenner1() , 'onResponse'], 1 );
$dispatcher->addListener( ResponseEvent::NAME , [new MyListenner2() , 'onResponse'] ,0 );

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/../.env');
$request = Request::createFromGlobals();
$routes = include __DIR__.'/../src/routing.php';
$context = new Routing\RequestContext();
$context->fromRequest($request);
$matcher = new Routing\Matcher\UrlMatcher($routes, $context);
$controllerResolver = new HttpKernel\Controller\ControllerResolver();
$argumentResolver = new HttpKernel\Controller\ArgumentResolver();
$fmk = new Framework($dispatcher,$matcher,$controllerResolver,$argumentResolver);
$response  = $fmk->handle($request) ; 


$response->send() ;