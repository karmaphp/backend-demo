<?php

use App\Repo\UserRepo;
use function DI\get;

return [

    'userRepo' => get(UserRepo::class)

];
