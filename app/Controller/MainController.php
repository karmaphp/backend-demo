<?php namespace App\Controller;

use App\Table\User;
use \Karma\Controller;
use Slim\Http\Response;

class MainController extends Controller
{
    public function Index()
    {
        $response = new Response();
        return $response->withJson(['data' => User::all()->map(function (User $user) {
            return [
                'id' => $user->id,
                'name' => $user->name
            ];
        })]);

    }
}