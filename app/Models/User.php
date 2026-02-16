<?php

namespace App\Models;

use App\Core\Database;
use PDO;

class User
{
    protected PDO $db;
    protected string $table = 'users';

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->getConnection();
    }

    public function find(int $id): ?array
    {
        $stmt = $this->db->prepare("SELECT id, full_name, username, email FROM {$this->table} WHERE id = :id LIMIT 1");
        $stmt->execute(['id' => $id]);

        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    public function findByUsername(string $username): ?array
    {
        $stmt = $this->db->prepare("SELECT * FROM {$this->table} WHERE username = :username LIMIT 1");
        $stmt->execute(['username' => $username]);

        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    public function findByEmail(string $email, ?int $excludeId = null): ?array
    {
        $sql = "SELECT * FROM {$this->table} WHERE email = :email";
        $params = ['email' => $email];

        if ($excludeId) {
            $sql .= " AND id != :exclude_id";
            $params['exclude_id'] = $excludeId;
        }

        $sql .= " LIMIT 1";

        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);

        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    public function create(array $data): bool
    {
        $stmt = $this->db->prepare("
            INSERT INTO {$this->table} (full_name, username, email, password)
            VALUES (:full_name, :username, :email, :password)
        ");

        return $stmt->execute([
            'full_name' => $data['fullname'],
            'username'  => $data['username'],
            'email'     => $data['email'],
            'password'  => password_hash($data['password'], PASSWORD_DEFAULT)
        ]);
    }

    public function update(int $id, array $data): bool
    {
        $stmt = $this->db->prepare("
            UPDATE {$this->table} 
            SET full_name = :full_name, username = :username, email = :email
            WHERE id = :id
        ");

        return $stmt->execute([
            'id'        => $id,
            'full_name' => $data['fullname'],
            'username'  => $data['username'],
            'email'     => $data['email']
        ]);
    }

    public function updatePassword(int $id, string $newPassword): bool
    {
        $stmt = $this->db->prepare("
            UPDATE {$this->table} 
            SET password = :password
            WHERE id = :id
        ");

        return $stmt->execute([
            'id'       => $id,
            'password' => password_hash($newPassword, PASSWORD_DEFAULT)
        ]);
    }

    public function findWithPassword(int $id): ?array
    {
        $stmt = $this->db->prepare("SELECT * FROM {$this->table} WHERE id = :id LIMIT 1");
        $stmt->execute(['id' => $id]);

        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    public function attempt(string $username, string $password): ?array
    {
        $user = $this->findByUsername($username);

        if (!$user) {
            return null;
        }

        if (!password_verify($password, $user['password'])) {
            return null;
        }

        return $user;
    }

    public function login(array $user): void
    {
        $_SESSION['user'] = [
            'id'       => $user['id'],
            'fullname' => $user['full_name'],
            'username' => $user['username'],
            'email'    => $user['email']
        ];
    }

    public function refreshSession(int $id): void
    {
        $user = $this->find($id);
        if ($user) {
            $this->login($user);
        }
    }
}
