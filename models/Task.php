<?php

// A class that represents a ToDo task.
class Task
{
    public $description;
    protected $completed;

    public function isComplete()
    {
        return $this->completed;
    }

    public function complete()
    {
        $this->completed = true;
    }
}