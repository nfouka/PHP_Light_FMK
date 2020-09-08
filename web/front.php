<?php 

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel;
use Symfony\Component\Routing;
use Symfony\Component\Dotenv\Dotenv;
use Core\Framework  ; 
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Matcher\UrlMatcher;

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

$fmk = new Framework($matcher,$controllerResolver,$argumentResolver);
$response  = $fmk->handle($request) ; 
$response->send() ; 


