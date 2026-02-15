<?php
namespace App\DesignPatterns\FactoryMethod;

class PdfDocument extends Document
{
    public function getType(): string
    {
        return 'pdf';
    }
}
