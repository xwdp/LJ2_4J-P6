<!DOCTYPE html> 
<html lang="nl">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta name="author" content="B. de Haan & A. Panagiotidis">
       <meta name="description" content="een game revieuw sites gemaakt door gamers voor gamers">
       <meta name="keywords" content="revieuws, games, gamestars, gs, sale, summer sale, merch, rating sites,the witcher, witcher, wild hunt, the witcher 3 wild hunt,">
       <title>GameStars</title>
       <script src="../scripts/main.js" defer></script>
       <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../img/logoTransperent.png">
    </head>
<body>
    
    <header>
        <nav class="logo">
            <a href="../index.php"><img id="logo" src="../img/logo.png" alt="logo GameStars"></a>
        </nav>
        <h1 id="logonaam">GameStars</h1>
        <nav class="topnav">
            <a href="../index.php">Home</a>
            <a href="../merch.php">Merch</a>   
            <a class="active" href="../games.php">Games</a>    
            <a href="../aboutUs.php">About Us & Contact Us</a>
        </nav>
    </header>
    <main>

    <?php
    //in game als je die aan past naar COD (call of duty) zal je die zien en met gta laat hij gta zien (grand theft auto) en of leeg is GodOfWar
$game = "";

switch ($game) {
  case "gta":
    echo "<article>
                <h2>GTA</h2>                        
                <h3><b>€61,45</b></h3>
                <p><b>Genre:</b> [openworld]</p>
                <p><b>Rating:</b>⭐⭐⭐⭐</p>
                <p><b>Beschrijving</b></p>
                <p>Grand Theft Auto V is een avonturenspel dat zowel vanuit het perspectief van een derde persoon als een eerste persoon wordt gespeeld in een open wereldomgeving. De first-person viewer is alleen beschikbaar op pc, PlayStation 4 en Xbox One. Spelers kunnen rennen, springen, zwemmen, zeilen, vliegen of rijden om te spelen. Tijdens het spel kunnen spelers verschillende missies voltooien om het verhaal van het spel verder te brengen. Het nastreven en voltooien van deze missies is echter volledig optioneel en de wereld is vrij om mee te spelen. Wanneer spelers zich in het spel schuldig maken aan illegaal gedrag, kan de politie reageren met verschillende intensiteitsniveaus, tot maximaal 5 sterren (weergegeven op de Gezocht-indicator op de HUD).</p>
            </article>";
    break;
  case "COD":
    echo "<article>
                <h2>The Witcher</h2>                        
                <h3><b>€339,95</b></h3>
                <p><b>Genre:</b> [FPS]</p>
                <p><b>Rating:</b>⭐⭐</p>
                <p><b>Beschrijving</b></p>
                <p>The Witcher is een uitdagende platformgame over het beklimmen van een berg. Madeline een trans meisje. klimt door een reeks moeilijke levels navigeert. het emotionele verhaal en de prachtige pixelkunst maken de klim een geweldige ervaring.</p>
            </article>";
    break;
    default:
  case "GodOfWar":
    echo "<article>
                <h2>God Of War</h2>                        
                <h3><b>€7,99</b></h3>
                <p><b>Genre:</b> [RPG]</p>
                <p><b>Rating:</b>⭐⭐⭐⭐⭐</p>
                <p><b>Beschrijving</b></p>
                <p>The Witcher is een uitdagende platformgame over het beklimmen van een berg. Madeline een trans meisje. klimt door een reeks moeilijke levels navigeert. het emotionele verhaal en de prachtige pixelkunst maken de klim een geweldige ervaring.</p>
            </article>";
    break;
}
?>

        <button onclick="buy()" class="buy">
            Koop
        </button>
    </main>

    <footer>
        <article>
            <h6 class="disclaimer">disclaimer: de redactie is niet verantwoordelijk voor fouten in de informatie</h6>
        </article>
    </footer>
    
</body>

</html>