<?php

$manager = new \Illuminate\Database\Capsule\Manager();

$manager->addConnection([
    'driver'    => 'mysql',
    'host'      => getenv('DB_HOSTNAME_MAIN'),
    'database'  => getenv('DB_DATABASE_MAIN'),
    'username'  => getenv('DB_USERNAME_MAIN'),
    'password'  => getenv('DB_PASSWORD_MAIN'),
    'port'      => getenv('DB_PORT'),
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => ''
]);

$manager->getConnection()->enableQueryLog();
$manager->setAsGlobal();
$manager->bootEloquent();
