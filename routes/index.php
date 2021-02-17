<?php

use function src\slimConfiguration;
use App\Controllers\ClientController;

$app = new \Slim\App(slimConfiguration());

// ========================================

$app->get('/clients', ClientController::class . ':getClients');
$app->post('/clients', ClientController::class . ':insertClients');
$app->put('/clients', ClientController::class . ':updateClients');
$app->delete('/clients', ClientController::class . ':deleteClients');

// ========================================

$app->run();