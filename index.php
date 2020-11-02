<?php 

require_once "vendor/autoload.php";
require_once "env.php";

$app = new \Slim\App();

$app->get('/', function($request, $response, $args){
    return $response->getBody()->write('Bem vindo ao Slim');
});

$app->run();