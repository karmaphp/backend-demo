<?php namespace App\Service;

use App\Base\Service;
use App\Table\UserTable;
use Illuminate\Database\Eloquent\Collection;

class UserService extends Service
{
    /**
     * @return Collection|UserTable[]
     */
    public function getAllUsers()
    {
        return $this->c->userRepo->all();
    }
}
