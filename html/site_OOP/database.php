<!-- brian -->
<?php 
    $host = "localhost"; 
    $dbname = "films"; 
    $username = "root"; // Update with your actual database username
    $password = ""; // Update with your actual database password

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        echo "Foutmelding: " . $e->getMessage();
    }
?>
<!-- brian -->