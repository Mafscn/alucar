<?php
    use function src\slimConfiguration;


    $app = new \Slim\App(slimConfiguration());

    // ================================================

    $app->get('/', function($request, $response, $args){
        return $response->getBody()->write('Bem vindo ao Slim');
    });
    
    // ================================================

    $app->run();