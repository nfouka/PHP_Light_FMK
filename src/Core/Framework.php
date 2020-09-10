<?php


namespace Core ; 

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Matcher\UrlMatcher;

class Framework {
    protected $matcher;
    protected $controllerResolver;
    protected $argumentResolver;

    public function __construct(UrlMatcher $matcher, ControllerResolver $controllerResolver, ArgumentResolver $argumentResolver)
    {
        $this->matcher = $matcher;
        $this->controllerResolver = $controllerResolver;
        $this->argumentResolver = $argumentResolver;
    }

    public function handle(Request $request) {
       

        $this->matcher->getContext()->fromRequest($request);
       
        try {
            $request->attributes->add($this->matcher->match($request->getPathInfo() == "/" ?  "/home" :  $request->getPathInfo()  ));
            $controller = $this->controllerResolver->getController($request); 
            $arguments = $this->argumentResolver->getArguments($request, $controller);  
            $response = call_user_func_array($controller, $arguments);
        } catch (ResourceNotFoundException $exception) {
            $response = new Response('Not Found', 404);
        } catch (\Exception $exception) {
            dump($exception) ; 
            $response = new Response('An error occurred', 500);
        }  

        return $response  ; 
    }
    
}