<?php

require_once 'vendor/autoload.php';

define('ROOT_DIR', __DIR__);

setlocale(LC_TIME, 'tr_TR.utf8');

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

require_once 'config/db.php';

$container = \App\Base\Container::build(
    require_once 'config/container.php'
);

$container->set('errorHandler', function() {
    return new App\Handler\Error();
});

$app = new \Karma\App($container);

// middleware
require_once 'config/middlewares.php';

require_once 'config/routes.php';

$app->run();