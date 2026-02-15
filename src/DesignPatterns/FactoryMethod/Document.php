<?php
namespace App\DesignPatterns\FactoryMethod;

abstract class Document
{
    abstract public function getType(): string;
}
