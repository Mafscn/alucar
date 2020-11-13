<?php
    use App\Controllers\LoginController;
    use function src\slimConfiguration;

    use Psr\Http\Message\{ServerRequestInterface as Request, ResponseInterface as Response};
    
    $app = new \Slim\App(slimConfiguration());
    $container = $app->getContainer();
    $container['view'] = new \Slim\Views\PhpRenderer('App/View/');

    // ================================================

            $app->get('/', function (Request $request, Response $response) {
                $response = $this->view->render($response, 'page-login.php');
                return $response;
            });

            $app->get('/teste', function (Request $request, Response $response) {
                $response = $this->view->render($response, 'teste.php');
                return $response;
            });

    // ================================================


    $app->run();