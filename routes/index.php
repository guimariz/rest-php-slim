<?php

use function src\slimConfiguration;
use App\Controllers\ClientsController;

$app = new \Slim\App(slimConfiguration());

// ========================================

$app->get('/clients', ClientsController::class . ':getClients');
$app->post('/clients', ClientsController::class . ':insertClients');
$app->put('/clients', ClientsController::class . ':updateClients');
$app->delete('/clients', ClientsController::class . ':deleteClients');

// ========================================

$app->run();