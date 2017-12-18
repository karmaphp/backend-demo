<?php

use App\Base\App;
use App\Base\Container;

// vendor'ü yükleyelim
require_once 'vendor/autoload.php';

// kök dizini daha sonra kullanmak için kaydedelim
define('ROOT_DIR', __DIR__);

// env değişkenlerini yükleyelim
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

// veritanını aktif edelim
require_once 'config/db.php';

// yeni bir container build edelim
$container = Container::build(
    require_once 'config/container.php'
);

// yeni bir app oluşturalım
$app = new App($container);

// middlewares
require_once 'config/middlewares.php';

// routes
require_once 'config/routes.php';

// run
$app->run();