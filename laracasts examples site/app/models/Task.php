<?php

namespace App\Models;

class Task {
    protected $description;
    protected $completed;

    public function isComplete()
    {
        return $this->completed;        
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function __toString()
    {
        return $this->description;
    }
}