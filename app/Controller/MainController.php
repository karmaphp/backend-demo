<?php namespace App\Controller;

use App\Base\Controller;
use App\Contract\Repo\UserContract;
use App\Table\User;

class MainController extends Controller
{
    /**
     * @Inject
     * @var UserContract
     */
    private $userRepo;

    public function Index()
    {
        return $this->response->withJson(['data' => $this->userRepo->all()->map(function (User $user) {
            return [
                'id' => $user->id,
                'name' => $user->name
            ];
        })]);
    }
}