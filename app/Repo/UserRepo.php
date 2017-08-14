<?php namespace App\Repo;

use App\Contract\Repo\UserContract;
use App\Table\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class UserRepo implements UserContract
{

    /**
     * @param int $id
     * @return User|Builder|null
     */
    public function find($id)
    {
       return User::query()
           ->find($id);
    }

    /**
     * @return Collection|User[]
     */
    public function all()
    {
        return User::query()
            ->get();
    }
}