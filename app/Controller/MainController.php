<?php namespace App\Controller;

use App\Base\BaseController;
use App\Contract\Repo\UserContract;
use App\Table\User;
use Slim\Http\Response;

/**
 * @property  Response response
 */
class MainController extends BaseController
{
    /**
     * @Inject
     * @var UserContract
     */
    private $userRepo;

    public function Index()
    {
        return  $this->userRepo->all()->map(function (User $user) {
            return [
                'id' => $user->id,
                'name' => $user->name
            ];
        });
    }
}