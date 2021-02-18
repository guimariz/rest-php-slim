<?php

namespace App\DAO\MySQL\TreinoJunto;

abstract class Connection {
  /**
   * @var \PDO
   */
  protected $pdo;

  public function __construct() {
    $host = putenv('TREINO_JUNTO_MYSQL_HOST=mysql');
    $port = putenv('TREINO_JUNTO_MYSQL_PORT=3306');
    $user = putenv('TREINO_JUNTO_MYSQL_USER=root');
    $pass = putenv('TREINO_JUNTO_MYSQL_PASSWORD=');
    $dbname= putenv('TREINO_JUNTO_MYSQL_DBNAME=treino_junto');
    
    $dsn = "mysql:host={$host};dbname={$dbname};port={$port}";

    $this->pdo = new \PDO($dsn, $user, $pass);
    $this->pdo->setAttribute(
      \PDO::ATTR_ERRMODE, 
      \PDO::ERRMODE_EXCEPTION 
    );
  }
}
