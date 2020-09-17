<?php
namespace tests;

use Symfony\Component\Routing\Matcher\UrlMatcherInterface;
use Symfony\Component\Routing\RequestContext;
use Controller\LeapYearController;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Core\Framework;
use Symfony\Component\HttpFoundation\Request;

class ControllerTest
{
    public function testControllerResponse()
    {
        $matcher = $this->createMock(UrlMatcherInterface::class);
        $matcher
        ->expects($this->once())
        ->method('match')
        ->will($this->returnValue([
            '_route' => 'is_leap_year/{year}',
            'year' => '2000',
            '_controller' => [new LeapYearController(), 'index']
        ]))
        ;
        $matcher
        ->expects($this->once())
        ->method('getContext')
        ->will($this->returnValue($this->createMock(RequestContext::class)))
        ;
        $controllerResolver = new ControllerResolver();
        $argumentResolver = new ArgumentResolver();
        
        $framework = new Framework($matcher, $controllerResolver, $argumentResolver);
        
        $response = $framework->handle(new Request());
        
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertStringContainsString('Yep, this is a leap year!', $response->getContent());
    }
}

