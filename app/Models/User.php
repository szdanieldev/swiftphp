<?php

namespace App\Models;

use App\Core\Database;
use PDO;

class User
{
    private PDO $db;
    private string $table = "users";

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->connect();
    }

    public function create(array $data): bool
    {
        $query = "INSERT INTO {$this->table} 
                  (full_name, username, email, password) 
                  VALUES (:fullname, :username, :email, :password)";

        $stmt = $this->db->prepare($query);

        $hashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);

        return $stmt->execute([
            ':fullname' => $data['fullname'],
            ':username' => $data['username'],
            ':email'    => $data['email'],
            ':password' => $hashedPassword
        ]);
    }

    public function findByUsername(string $username): ?array
    {
        $query = "SELECT * FROM {$this->table} 
                  WHERE username = :username 
                  LIMIT 1";

        $stmt = $this->db->prepare($query);
        $stmt->execute([':username' => $username]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        return $user ?: null;
    }
}
