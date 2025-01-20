<?php 
    require_once 'Connect.php';
    class Film extends Connect{

        public function addFilm(){
            $title = $_POST['title'];
            $releaseYear = $_POST['releaseYear'];
            $genre = $_POST['genre'];
            try{
                $stmt = $this->conn->prepare("INSERT INTO film (filmnaam, releasedate, filmgenre) VALUES (?, ?, ?)");
                // Execute the prepared statement with the form data
                $stmt->execute([$title, $releaseYear, $genre]);
                echo "Film added successfully!";
            }catch (PDOException $e) {
                // Display error message if something goes wrong
                echo "Error: " . $e->getMessage();
            }
    }
}
?>