<?php namespace App\Repo\Eloquent;

use App\Contract\Repo\UserRepoContract;
use App\Table\UserTable;
use Illuminate\Database\Eloquent\Collection;

class UserRepo implements UserRepoContract
{
    /**
     * @param int $id
     * @return UserTable|null
     */
    public function find($id)
    {
        return UserTable::query()
            ->find($id);
    }

    /**
     * @return Collection|UserTable[]
     */
    public function all()
    {
        return UserTable::query()
            ->get();
    }
}
