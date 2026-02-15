<?php
namespace App\DesignPatterns\FactoryMethod;

abstract class DocumentCreator
{
    abstract protected function createDocument(): Document;

    public function create(): Document
    {
        return $this->createDocument();
    }
}
