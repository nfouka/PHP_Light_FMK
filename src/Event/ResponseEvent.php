<?php


namespace Event;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\EventDispatcher\Event;

class ResponseEvent extends Event
{
    
    public const NAME = 'response.event';
    private $request;
    private $response;
    
    public function __construct(Response $response, Request $request)
    {
        $this->response = $response;
        $this->request = $request;
    }
    
    public function getResponse()
    {
        return $this->response;
    }
    
    public function getRequest()
    {
        return $this->request;
    }
}