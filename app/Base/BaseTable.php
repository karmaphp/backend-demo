<?php namespace App\Base;

use Illuminate\Database\Eloquent\Model;

class BaseTable extends Model
{
    protected $connection = 'default';
}