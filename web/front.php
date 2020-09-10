<?php 


require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Dotenv\Dotenv;

$routes = include __DIR__.'/../src/routing.php';
$sc =     include __DIR__.'/../src/container.php';


$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/../.env');
$fmk =$sc->get('framework') ; 
$fmk->handle(Request::createFromGlobals())->send() ;