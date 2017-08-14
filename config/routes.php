<?php

use App\Controller\MainController;

$app->group('/api', function () use ($app) {
    $app->get('/deneme', [MainController::class, 'Index']); // blabla

})->add(\App\Middleware\TokenMiddleware::class);