<?php 



// example.com/tests/Simplex/Tests/FrameworkTest.php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ArgumentResolverInterface;
use Symfony\Component\HttpKernel\Controller\ControllerResolverInterface;
use Symfony\Component\Routing;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Core\Framework;

class FrameworkTest extends TestCase
{
    public function testNotFoundHandling()
    {
        $framework = $this->getFrameworkForException(new ResourceNotFoundException());
        
        $response = $framework->handle(new Request());
        
        $this->assertEquals(404, $response->getStatusCode());
    }
    
    private function getFrameworkForException($exception)
    {
        $matcher = $this->createMock(Routing\Matcher\UrlMatcherInterface::class);
        
        $matcher
        ->expects($this->once())
        ->method('match')
        ->will($this->throwException($exception))
        ;
        
        
        
        $matcher
        ->expects($this->once())
        ->method('getContext')
        ->will($this->returnValue($this->createMock(Routing\RequestContext::class)))
        ;
        
        dump($matcher) ; 
        
        $controllerResolver = $this->createMock(ControllerResolverInterface::class);
        $argumentResolver = $this->createMock(ArgumentResolverInterface::class);
        $disatcher = $this->createMock(EventDispatcher::class);
        
        return new Framework($disatcher , $matcher, $controllerResolver, $argumentResolver);
    }
}



?>