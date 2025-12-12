<?php
namespace App\Models;

class Person
{
    public $name;
    public $age;

    public function __construct($name="", $age=0)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function isAdult()
    {
        return $this->age >= 18;
    }
}
