<?php

namespace App\Core;

use PDO;

class Database
{
    protected $pdo;

    public function __construct()
    {
        $config = require __DIR__ . '/../../config/config.php';
        $db = $config['db'];

        try {
            $this->pdo = new PDO(
                "mysql:host={$db['host']};dbname={$db['dbname']};charset={$db['charset']}",
                $db['user'],
                $db['password']
            );
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public function getConnection(): PDO
    {
        return $this->pdo;
    }
}
