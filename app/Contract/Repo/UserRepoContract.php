<?php namespace App\Contract\Repo;

use App\Table\UserTable;
use Illuminate\Database\Eloquent\Collection;

interface UserRepoContract
{
    /**
     * @param int $id
     * @return UserTable|null
     */
    public function find($id);

    /**
     * @return Collection|UserTable[]
     */
    public function all();
}
