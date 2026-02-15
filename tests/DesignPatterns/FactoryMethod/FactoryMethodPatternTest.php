<?php
use PHPUnit\Framework\TestCase;
use App\DesignPatterns\FactoryMethod\PdfDocumentCreator;
use App\DesignPatterns\FactoryMethod\HtmlDocumentCreator;
use App\DesignPatterns\FactoryMethod\PdfDocument;
use App\DesignPatterns\FactoryMethod\HtmlDocument;
use App\DesignPatterns\FactoryMethod\Document;

class FactoryMethodPatternTest extends TestCase
{
    public function testPdfDocumentCreatorCreateReturnsPdfDocumentInstance()
    {
        $creator = new PdfDocumentCreator();
        $document = $creator->create();
        $this->assertInstanceOf(PdfDocument::class, $document);
        $this->assertInstanceOf(Document::class, $document);
    }

    public function testHtmlDocumentCreatorCreateReturnsHtmlDocumentInstance()
    {
        $creator = new HtmlDocumentCreator();
        $document = $creator->create();
        $this->assertInstanceOf(HtmlDocument::class, $document);
        $this->assertInstanceOf(Document::class, $document);
    }

    public function testPdfDocumentCreatorReturnsDocumentWithCorrectType()
    {
        $creator = new PdfDocumentCreator();
        $document = $creator->create();
        $this->assertEquals('pdf', $document->getType());
    }

    public function testHtmlDocumentCreatorReturnsDocumentWithCorrectType()
    {
        $creator = new HtmlDocumentCreator();
        $document = $creator->create();
        $this->assertEquals('html', $document->getType());
    }
}
