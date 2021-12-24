<?php

namespace Bundles\AppBundle\Controller;

use Core\AbstrcatController;
use Faker\Factory;
use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Twig\Extension\AbstractExtension;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;



class AppController extends AbstrcatController
{

    public function __construct()
    {
        parent::__construct(__DIR__."/../Templates");
    }

    public function index($year , Request $request )
    {
        $faker = Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $collectionModel[] =  $faker ;
        }
        return $this->renderView(
            'home/home.html.twig' , array(
                'name' =>  $year , "all" => $collectionModel , "LightFrameWork" => $year
            )
        ) ;
    }

}
