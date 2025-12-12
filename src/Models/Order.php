<?php
namespace App\Models;

class Order
{
    public $products = [];

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    public function getTotal()
    {
        $sum = 0;
        foreach($this->products as $p)
            $sum += $p->price;
        return $sum;
    }
}
