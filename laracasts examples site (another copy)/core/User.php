<?php

class User
{
    protected $name;


    public function __toString()
    {
        return $this->name;
    }

}