<?php
namespace App\DesignPatterns\FactoryMethod;

class HtmlDocument extends Document
{
    public function getType(): string
    {
        return 'html';
    }
}
