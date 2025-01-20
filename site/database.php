<?php 
    include "cookies.php";

    $host = "localhost"; 
    $dbname = "films"; 
    $username = "root"; 
    $password = ""; 

    try{

        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);


        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


        $query = "SELECT * FROM gebruikers WHERE username = :username AND password = :password";
        $statement = $pdo->prepare($query);
        $statement->bindParam(':username', $_POST['username']);
        

        $statement->execute();

        $result = $statement->fetch();

        if($result && password_verify($_POST['password'], $result->password)) {
            echo "Login succesvol!";
        }else {
            echo "Login mislukt!";
        }
    } catch (PDOException $e){

        echo "Foutmelding: " . $e->getMessage();
    }
    
    // $afbeeldingen = [ 'img/films/81fk-N7tvbL._AC_UF894,1000_QL80_.jpg',
    // 'img/films/A_Minecraft_Movie_poster.jpg',
    // 'img/films/Dune-Part-Two-Dolby-Poster.webp', 
    // 'img/films/Kids_Weekend__Vaiana_2.webp', 
    // 'img/films/Kleuterbios__Een_Nieuwe_Vriend_voor_Dikkie_Dik.avif', 
    // 'img/films/Kraven_the_Hunter.webp',
    // 'img/films/Ladies_Night__Schitterend.avif',
    // 'img/films/Megalopolis.webp',
    // 'img/films/MEIDEN_Avond__Juf_Braaksel_2.webp',
    // 'img/films/Pushpa_2__The_Rule.avif',
    // 'img/films/RM___Right_People_Wrong_Place.avif',
    // 'img/films/Wicked.webp'];
    
    // foreach ($afbeeldingen as $bestand) {$afbeelding = addslashes(file_get_contents($bestand));
    //      $sql = "INSERT INTO film (afbeelding) VALUES ('$afbeelding')";
    //      if ($conn->query($sql) === TRUE) { echo "Afbeelding succesvol toegevoegd: $bestand <br>";
    //      } else { echo "Fout bij het toevoegen van afbeelding: $bestand <br>" . $conn->error . "<br>";
    //      } } $conn->close();
    
    $pdo = null;
    ?>

    