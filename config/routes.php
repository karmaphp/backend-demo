<?php

$app->get('/', [\App\Controller\MainController::class, 'Index']);
$app->get('/hello/{name}', [\App\Controller\MainController::class, 'Hello']);

$app->group('/api', function () use ($app) {
    $app->get('/deneme', [\App\Controller\MainController::class, 'Index']); // blabla
})->add(\App\Middleware\TokenMiddleware::class);