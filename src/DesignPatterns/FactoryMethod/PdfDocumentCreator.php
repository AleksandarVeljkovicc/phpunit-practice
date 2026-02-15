<?php
namespace App\DesignPatterns\FactoryMethod;

class PdfDocumentCreator extends DocumentCreator
{
    protected function createDocument(): Document
    {
        return new PdfDocument();
    }
}
