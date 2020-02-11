<?php

use App\Controller\MainController;
use Slim\Routing\RouteCollectorProxy;

$app->group('/api', function (RouteCollectorProxy $group) {

    $group->get('/index', [MainController::class, 'Index']);

});
