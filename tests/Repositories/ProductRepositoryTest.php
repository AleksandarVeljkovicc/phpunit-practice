<?php
use PHPUnit\Framework\TestCase;
use App\Repositories\ProductRepository;

class ProductRepositoryTest extends TestCase
{
    private $pdo;

    protected function setUp(): void
    {
        $this->pdo = new PDO('sqlite::memory:');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $this->pdo->exec("
            CREATE TABLE products (
                id INTEGER PRIMARY KEY,
                name TEXT,
                price INTEGER
            )
        ");

        $this->pdo->exec("INSERT INTO products (id, name, price) VALUES (1, 'Product A', 50)");
        $this->pdo->exec("INSERT INTO products (id, name, price) VALUES (2, 'Product B', 100)");
    }

    public function testGetProductById()
    {
        $repo = new ProductRepository($this->pdo);

        $this->assertEquals(['id' => 1, 'name' => 'Product A', 'price' => 50], $repo->getProductById(1));
        $this->assertEquals(['id' => 2, 'name' => 'Product B', 'price' => 100], $repo->getProductById(2));
        $this->assertFalse($repo->getProductById(3)); 
    }
}
