<?php


// example.com/src/app.php
use Symfony\Component\Routing;
use Symfony\Component\HttpFoundation\Response;

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


$routes->add('leap_year', new Routing\Route('/is_leap_year/{year}', [
    'year' => null,
    '_controller' => function ($request) {
            
            if( !empty($request->get('year')) ) {
            

            if (is_leap_year($request->attributes->get('year'))) {
                $request->attributes->set('is_year', "IS YEAP YEAR" );
            }else{
                $request->attributes->set('is_year', "IS NOT YEAP YEAR"  );
            }
            $response = render_template($request);
            $response->headers->set('Content-Type', 'text/html');
            return $response;
            }else{
                return new Response("Paramter year in URL is required !") ; 
            }
    }
]));


return $routes;
