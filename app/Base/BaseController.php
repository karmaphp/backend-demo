<?php namespace App\Base;

class BaseController
{
    protected $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

}