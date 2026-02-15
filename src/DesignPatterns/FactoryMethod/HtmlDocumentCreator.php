<?php
namespace App\DesignPatterns\FactoryMethod;

class HtmlDocumentCreator extends DocumentCreator
{
    protected function createDocument(): Document
    {
        return new HtmlDocument();
    }
}
