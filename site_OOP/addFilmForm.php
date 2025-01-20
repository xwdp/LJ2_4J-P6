<?php
        // Check if the form is submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Retrieve form data
            require_once 'oop_classes/Film.php';
            $film = new Film();
            $film->addFilm();
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Film</title>
</head>

<body>
    <h1>Add a New Film</h1>
    <!-- Form to add a new film -->
    <form action="addFilmForm.php" method="post">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br><br>

        <label for="releaseYear">Release Year:</label>
        <input type="number" id="releaseYear" name="releaseYear" required><br><br>

        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="genre" required><br><br>

        <input type="submit" value="Add Film">
    </form>


</body>
</html>
