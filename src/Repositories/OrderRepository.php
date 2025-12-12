<?php
namespace App\Repositories;

class OrderRepository
{
    private $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getOrderById($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM orders WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}
