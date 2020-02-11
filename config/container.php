<?php

use App\Repo\UserRepo;
use App\Service\UserService;
use function DI\get;

return [

    'user' => get(UserService::class),

    'userRepo' => get(UserRepo::class)

];
