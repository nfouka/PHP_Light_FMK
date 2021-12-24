<?php

namespace Core;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;



class AbstrcatController
{
    protected FilesystemLoader $loader ;
    protected Environment $twig   ;

    public function __construct($template_path)
    {

        $this->loader = new FilesystemLoader(array(__DIR__."/../../public",$template_path ) );
        $this->twig = new Environment($this->loader ,
                    array('debug'      => true ,
                         'auto_reload' => true  ,
                         'cache' => __DIR__."/../../cache"
                    ));
        $this->twig->addExtension(new DebugExtension());

    }

    public function renderView(string $content , $array ){
        $template = $this->twig->load($content);
        $render = $template->render( $array );
        return new Response($render);
    }

}