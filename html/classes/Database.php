<?php

class Database
{
    private $servername = "db";
    private $username = "root";
    private $password = "root";
    protected $conn;


    function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=phplessen", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

   
}
