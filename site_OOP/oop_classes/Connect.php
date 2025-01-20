<?php
    abstract class Connect{
        protected $conn;
       function __construct(){

            $host = "localhost"; 
            $dbname = "films"; 
            $username = "root"; // Update with your actual database username
            $password = ""; // Update with your actual database password
            
            // Data Source Name (DSN) specifies the connection details
            // Format: "mysql:host=hostname;dbname=database;charset=charset"
            $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            try {
                // Create a new PDO instance
                $this->conn = new PDO($dsn, $username, $password, $options);
                // Prepare an SQL statement for execution
              
            } catch (PDOException $e) {
                // Display error message if something goes wrong
                echo "Error: " . $e->getMessage();
            }

        }

    }
?>