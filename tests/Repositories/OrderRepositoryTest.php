<?php
use PHPUnit\Framework\TestCase;
use App\Repositories\OrderRepository;

class OrderRepositoryTest extends TestCase
{
    private $pdo;

    protected function setUp(): void
    {
        $this->pdo = new PDO('sqlite::memory:');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $this->pdo->exec("
            CREATE TABLE orders (
                id INTEGER PRIMARY KEY,
                total INTEGER
            )
        ");

        $this->pdo->exec("INSERT INTO orders (id, total) VALUES (1, 100)");
        $this->pdo->exec("INSERT INTO orders (id, total) VALUES (2, 250)");
    }

    public function testGetOrderById()
    {
        $repo = new OrderRepository($this->pdo);

        $this->assertEquals(['id' => 1, 'total' => 100], $repo->getOrderById(1));
        $this->assertEquals(['id' => 2, 'total' => 250], $repo->getOrderById(2));
        $this->assertFalse($repo->getOrderById(3));
    }
}
