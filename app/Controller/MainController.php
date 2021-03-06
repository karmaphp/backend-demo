<?php namespace App\Controller;

use App\Base\Controller;
use App\Table\UserTable;

class MainController extends Controller
{
    public function Index()
    {
        return $this->json([
            'data' => $this->c->user->getAllUsers()->map(function (UserTable $user) {
                return [
                    'id'   => $user->id,
                    'name' => $user->name
                ];
            })
        ]);
    }
}
