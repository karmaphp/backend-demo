<?php

use App\Controller\MainController;

$app->group('/api', function () use ($app) {

    $app->get('/index', [MainController::class, 'Index']);

});
