<?php 



use Core\Framework;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Event\ResponseEvent;



$containerBuilder = new ContainerBuilder();
$containerBuilder->register('context', 'Symfony\Component\Routing\RequestContext');
$containerBuilder->register('matcher', 'Symfony\Component\Routing\Matcher\UrlMatcher')
        ->setArguments([$routes, new Reference('context')]) ;

$containerBuilder->register('resolver', ControllerResolver::class );
$containerBuilder->register('argumentResolver',  ArgumentResolver::class );


$containerBuilder->register( ResponseEvent::NAME , \Listenner\SubscriberEvenetDispatcher::class ) ; 
$containerBuilder->register('dispatcher', EventDispatcher::class )

    ->addMethodCall('addSubscriber', [new Reference(ResponseEvent::NAME)]) ; 


    
$containerBuilder->register('framework', Framework::class )
->setArguments(array(
    new Reference('dispatcher'),
    new Reference('matcher'),
    new Reference('resolver') ,
    new Reference('argumentResolver')
)) ; 

return $containerBuilder  ; 

?>
