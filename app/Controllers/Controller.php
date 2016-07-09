<?php

namespace App\Controllers;


class Controller
{
    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function __get($property)
    {
        // TODO: Implement __get() method.

        if($this->container->{$property}){

            return $this->container->{$property};
        }
    }
}