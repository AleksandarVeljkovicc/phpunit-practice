<?php
namespace App\Models;

class Product
{
    public $name;
    public $price;

    public function __construct($name="", $price=0)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getFormattedPrice()
    {
        return number_format($this->price, 2);
    }
}
