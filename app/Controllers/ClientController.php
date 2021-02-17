<?php
namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class ClientController {
  public function getClients(Request $request, Response $response, array $args): Response {
    $response = $response->withJson([
      'message' => 'Hello World'
    ]);
    return $response;
  }
  public function insertClients(Request $request, Response $response, array $args): Response {

    return $response;
  }
  public function updateClients(Request $request, Response $response, array $args): Response  {

    return $response;
  }
  public function deleteClients(Request $request, Response $response, array $args): Response  {

    return $response;
  }
}