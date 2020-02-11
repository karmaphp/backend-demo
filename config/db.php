<?php

use Illuminate\Database\Capsule\Manager;

$manager = new Manager();

$manager->addConnection([
    'driver'    => getenv('DB_DRIVER_MAIN'),
    'host'      => getenv('DB_HOSTNAME_MAIN'),
    'database'  => getenv('DB_DATABASE_MAIN'),
    'username'  => getenv('DB_USERNAME_MAIN'),
    'password'  => getenv('DB_PASSWORD_MAIN'),
    'port'      => getenv('DB_PORT_MAIN'),
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => ''
]);

$manager->getConnection()->enableQueryLog();
$manager->setAsGlobal();
$manager->bootEloquent();
