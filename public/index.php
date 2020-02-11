<?php

use App\Base\Container;
use Dotenv\Dotenv;
use Karma\AppFactory;
use Karma\ContainerBuilder;

// vendor'ü yükleyelim
require_once 'vendor/autoload.php';

// kök dizini daha sonra kullanmak için kaydedelim
define('ROOT_DIR', __DIR__ . '/..');

// env değişkenlerini yükleyelim
Dotenv::createImmutable(ROOT_DIR)->load();

// veritanını aktif edelim
require_once ROOT_DIR . '/config/db.php';

// yeni bir container build edelim
$container = ContainerBuilder::build(
    Container::class,
    require_once ROOT_DIR . '/config/container.php'
);

// yeni bir app oluşturalım
$app = AppFactory::create($container);

// middlewares
require_once 'config/middlewares.php';

// routes
require_once 'config/routes.php';

// run
$app->run();
