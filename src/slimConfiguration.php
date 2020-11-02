<?php
    
    namespace src;

    function SlimConfiguration(): \Slim\Container{
        $configuration = [
            'settings' => [
                'displayErrorDetails' => getenv('DISPLAY_ERRORS_DETAILS'),
            ],
        ];
        return new \Slim\Container($configuration);
    }