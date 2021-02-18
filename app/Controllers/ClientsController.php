<?php
namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\DAO\MySQL\TreinoJunto\ClientsDAO;

final class ClientsController {
  public function getClients(Request $request, Response $response, array $args): Response {
    $clientsDAO = new ClientsDAO();
    $clients = $clientsDAO->getAllClients();
    $response = $response->withJson($clients);

    // $response = $response->withJson([
    //   'message' => 'Hello world'
    // ]);

    return $response;
  }
  public function insertClients(Request $request, Response $response, array $args): Response {
    $data = $request->getParsedBody();
    
    $ClientsDAO = new ClientsDAO();
    $client = new ClientModel();
    $client->setName($data['name']);
    $client->setCep($data['cep']);
    $client->setBairro($data['bairro']);
    $client->setCidade($data['cidade']);
    $client->setEstado($data['estado']);
    $client->setLogradouro($data['logradouro']);
    $client->setNumero($data['numero']);
    $client->setCpf($data['cpf']);
    $clientsDAO->insertClient($client);

    $response = $response->withJson([
      'message' => 'Cliente inserido com sucesso!'
    ]);
    
    return $response;
  }
  public function updateClients(Request $request, Response $response, array $args): Response  {

    return $response;
  }
  public function deleteClients(Request $request, Response $response, array $args): Response  {

    return $response;
  }
}