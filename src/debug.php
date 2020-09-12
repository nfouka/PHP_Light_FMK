<?php

use Symfony\Component\Dotenv\Dotenv;

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/../.env');