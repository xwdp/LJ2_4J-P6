<?php

require_once 'Database.php';

class User extends Database{
    // Add user
    public function addUser($username, $password, $email)
    {
        $stmt = $this->conn->prepare("INSERT INTO users (username, password, email) VALUES (:username, :password, :email)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
    }
    public function delUser($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM users WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    public function showUser($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function editUser($id, $username, $password, $email)
    {
        $stmt = $this->conn->prepare("UPDATE users SET username = :username, password = :password, email = :email WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
    }

    // Get all users
    public static function getUsers()
    {
        $conn  = new Database();
        $stmt = $conn->conn->query("SELECT * FROM users");
        return $stmt->fetchAll();
    }


}