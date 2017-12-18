<?php

return [

    'userRepo' => \DI\get(\App\Contract\Repo\UserRepoContract::class),

    'settings.displayErrorDetails' => getenv('APP_DEBUG'),

    'errorHandler' => DI\object(\App\Handler\Error::class)
        ->constructor(DI\get('settings.displayErrorDetails')),

    \App\Contract\Repo\UserRepoContract::class => DI\get(\App\Repo\Eloquent\UserRepo::class),

    \Slim\Http\Request::class  => \DI\get('request'),
    \Slim\Http\Response::class => \DI\get('response'),
    \App\Base\Container::class => \DI\get(\DI\Container::class),

];
