<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . './vendor/autoload.php';

$app = new \Slim\App();

$app->get('/', function(Request $request, Response $response, array $args){
  return $response->getBody()->write('Hello World');
});

$app->run();