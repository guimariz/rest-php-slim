<?php 

namespace App\DAO\MySQL\TreinoJunto;

class ClientsDAO extends Connection {
  public function __construct() {
    parent::__construct();
  }

  public function test() {
    $clients = $this->pdo
      ->query('SELECT * FROM tbl_client')
      ->fetchAll(\PDO::FETCH_ASSOC);

    echo "<pre>";
    
    foreach($clients as $client) {
      var_dump($client);
    }
    die;
  }
}