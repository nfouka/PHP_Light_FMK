<?php 


require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Dotenv\Dotenv;

$routes = include __DIR__.'/../src/routing.php';
$sc =     include __DIR__.'/../src/container.php';
$dotenv = include __DIR__.'/../src/debug.php';

$fmk =$sc->get('framework') ; 
$fmk->handle(Request::createFromGlobals())->send() ;