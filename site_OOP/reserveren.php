<?php 
include "head.php";
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
        </nav>
    </header>
    <main class="resvform">
        <br><h1 class="h1r">Reserveren</h1><br><br>
        <section class="reserveren">
            <form action="reserveren.php" method="get">
                <input type="text" name="naam" placeholder="Naam" size="50"><br><br>
                <input type="text" name="email" placeholder="Email" size="50"><br><br>
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
                <input type="date" value="datum" placeholder="Datum"><br><br>
                <select name="locatie" value="locatie">
                    <option value="s' Gravenhage">s' Gravenhage</option>
                    <option value="Leidschendam">Leidschendam</option>
                    <option value="Leiden">Leiden</option>
                </select>
                <input type="number" name="aantpers" placeholder="Aant. Pers." min="1" max="5"><br><br>
                <button type="submit" value="Reserveer Tickets">Reserveer Tickets</button>
            </form>
        </section>
    </main>
    <?php 
    include "footer.php";
    ?>
</body>
</html>
<!--brian-->