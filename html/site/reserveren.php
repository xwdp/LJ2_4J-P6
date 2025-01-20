<?php include "head.php"?>
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
                return "Nieuwe reservering succesvol aangemaakt."; 
            } else { 
                return "ERROR: " . $sql . "<br>" . $this->conn->error; 
            } 
        } 
        public function close() {
            $this->conn->close(); 
        } 
        }
?>
       <link rel="stylesheet" href="css/resvform.css">
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

    <main class="resvform">
        <br><h1 class="h1r">Reserveren</h1><br><br>
        <section class="reserveren">
            <form action="reserveren.php" method="POST">
                <input type="text" name="naam" placeholder="Voor- en achternaam" size="50"><br><br>
                <input type="text" name="email" placeholder="E-mail" size="50"><br><br>
                <select name="film" name="Film" >
                    <option value="johnWick">John Wick 4</option>
                    <option value="minecraft">Minecraft</option>
                    <option value="dune">Dune 2</option>
                    <option value="vaiana">Vaiana 2</option>
                    <option value="dikkiedik">Dikkie Dik</option>
                    <option value="kraven">Kraven</option>
                    <option value="schitterend">Schitterend</option>
                    <option value="megalopolis">Megalopolis</option>
                    <option value="juf">Juf Braaksel</option>
                </select>
                <input type="date" name="datum" placeholder="Datum"><br><br>
                <select name="locatie" value="locatie">
                    <option value="Den Haag">Den Haag</option>
                    <option value="Leidschendam">Leidschendam</option>
                    <option value="Leiden">Leiden</option>
                </select>
                <input type="number" name="aantpers" placeholder="Aant. Pers." min="1" max="5"><br><br>
                <button type="submit" value="Reserveer Tickets">Reserveer Tickets</button><br>
                <div class="buttons-row">
                <button type="button" onclick="window.location.href='update_reservationV2.php'">Wijzig Reservatie</button>
                <button type="button" onclick="window.location.href='delete_reservation.php'">Verwijder Reservatie</button>
                </div>
            </form>
        </section>
    </main>

        <?php 
       include "footer.php"
       ?>
</body>
<?php 
class Reservation{
    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function create_reservation($naam, $email, $film, $datum, $locatie, $aantalpersonen){
        if (empty($naam) || empty($email) || empty($film) || empty($datum) || empty($locatie) || empty($aantalpersonen)) { 
            die("Vul alle velden in.");
    }

    if(!preg_match("/^\d{4}-\d{2}-\d{2}$/", $datum)){
        die("Ongeldig datum. Gebruik het formaat YYYY-MM-DD.");
    }

    $naam = $this->db->real_escape($naam);
    $email = $this->db->real_escape($email);
    $film = $this->db->real_escape($film); 
    $datum = $this->db->real_escape($datum); 
    $locatie = $this->db->real_escape($locatie); 
    $aantalpersonen = (int)$this->db->real_escape($aantalpersonen);

    $sql = "INSERT INTO reserveringen(`naam`, `email`, `film`, `datum`, `locatie`, `aantalpersonen`)
    VALUES('$naam', '$email', '$film', '$datum', '$locatie', '$aantalpersonen')";

    return $this->db->query($sql);
    }
    }
$db = new Database("localhost", "root", "", "reservering");
$reservation = new Reservation($db);
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $naam = $_POST['naam'];
    $email = $_POST['email'];
    $film = $_POST['film'];
    $datum = $_POST['datum'];
    $locatie = $_POST['locatie'];
    $aantalpersonen = $_POST['aantpers'];

    echo $reservation->create_reservation($naam, $email, $film, $datum, $locatie, $aantalpersonen);
}

$db->close();
?>
</html>
<!--Julian-->