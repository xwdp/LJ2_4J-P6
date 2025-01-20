<?php include "head.php"?>


<!DOCTYPE html> 
    <html> 
    <link rel="stylesheet" href="css/resvform.css">
            <title>Wijzig Reservatie</title> 
        </head> 
        <body> 
        <header>
        <nav class="logo">
            <a href="index.php"><img id="logo" src="img/logo/Gemini_Generated_Image_upriieupriieupri.jpeg" alt="logo GameStars"></a>
        </nav>
        <h1 id="logonaam">Mbo Cinnemas</h1>
                <nav class="topnav">
                        <a href="index.php">Home</a>
                        <a href="films.php">Films</a>    
                        <a class="active" href="reserveren.php">Reserveren</a>   
                        <a href="agenda.php">Agenda</a>   
                        <a href="upcomming.php">Upcoming</a>
                        <a href="zoeken.php">Zoeken🔎</a>
                    </nav>
    </header>
    <main class="main_resv_up-del">
    <?php
class Database {
    private $conn; 
    public function __construct($servername, $username, $password, $dbname) {
        $this->conn = new mysqli($servername, $username, $password, $dbname); 
        if ($this->conn->connect_error) { 
            die("Connection failed: " . $this->conn->connect_error); 
        } 
        }
        public function real_escape($string) { 
            return $this->conn->real_escape_string($string); 
        } 
        public function query($sql) {
            if ($this->conn->query($sql) === TRUE) 
            { 
                return "Reservering succesvol gewijzigd."; 
            } else { 
                return "ERROR: " . $sql . "<br>" . $this->conn->error; 
            } 
        } 
        public function close() {
            $this->conn->close(); 
        } 
        }
            ?>
            <h1 class="h1r">Voer Uw Gegevens In</h1><br>
            <section class="reserveren">
            <form action="delete_reservation.php" method="POST"> 
            
                <input type="text" name="naam" placeholder="Voor- en achternaam" size="50"><br><br> 
                <input type="text" name="email" placeholder="E-mail" size="50"><br><br> 
                <button type="submit" value="WIjzig">Wijzig Reservatie</button><br> 
            </form> 
    </section>
        <?php?>
        
        </main>
           <?php include "footer.php";?>
        </body> 
    </html>