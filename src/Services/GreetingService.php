<?php
namespace App\Services;

class GreetingService
{
    public function greet($name)
    {
        if (empty($name)) return "Hello, stranger";
        return "Hello, $name";
    }
}
