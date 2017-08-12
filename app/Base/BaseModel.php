<?php namespace App\Base;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    protected $connection = 'default';
}