<?php 


// framework/index.php
require_once __DIR__.'/init.php';

$name = $request->get('name', 'World');

$response->setContent(sprintf('Hello %s', htmlspecialchars($name, ENT_QUOTES, 'UTF-8')));
$response->send();
