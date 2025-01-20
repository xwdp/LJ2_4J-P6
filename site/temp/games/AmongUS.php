[11:36] Apo Panagiotidis
<!DOCTYPE html>
<html lang="nl">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="B. de Haan & A. Panagiotidis">
    <meta name="description" content="een game revieuw sites gemaakt door gamers voor gamers">
    <meta name="keywords"
        content="revieuws, games, gamestars, gs, sale, summer sale, merch, rating sites,the witcher, witcher, wild hunt, the witcher 3 wild hunt,">
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
        //in game als je die aan past naar Tekken 8 zal je die zien en met AmongUs laat hij AmongUs zien en of leeg is AmongUs
        $game = "";
 
        switch ($game) {
            case "Among_Us":
                echo "<article>
                <h2>AmongUs</h2>                        
                <h3><b>€15,45</b></h3>
                <p><b>Genre:</b> [Deception]</p>
                <p><b>Rating:</b>⭐⭐⭐⭐</p>
                <p><b>Beschrijving</b></p>
                <p>Among Us is een multiplayer party game van InnerSloth, waarin spelers op een ruimteschip worden verdeeld in Crewmates en Impostors. Crewmates moeten samenwerken om taken te voltooien en proberen de Impostors te ontdekken en te elimineren via stemmen. Impostors doen alsof ze Crewmates zijn, saboteren het schip en schakelen Crewmates uit zonder ontdekt te worden. Het spel draait om samenwerking, strategie en bedrog.</p>
            </article>";
                break;
            case "Tekken_2":
                echo "<article>
                <h2>Tekken 2</h2>                        
                <h3><b>€39.99</b></h3>
                <p><b>Genre:</b> [Vechtspel]</p>
                <p><b>Rating:</b>⭐⭐v⭐⭐</p>
                <p><b>Beschrijving</b></p>
                <p>Tekken 2 is een vechtspel waarin spelers kiezen uit een diverse cast van karakters, elk met unieke vechtstijlen en speciale moves. Het spel biedt intense één-tegen-één gevechten, waarbij spelers combo's, speciale aanvallen, en strategie gebruiken om hun tegenstander te verslaan. Tekken 8 introduceert nieuwe personages en gameplay-mechanieken, en bouwt voort op de rijke verhaallijn van de serie. Met zowel single-player als multiplayer-modi, richt het spel zich op technische vaardigheid en competitieve gameplay.</p>
            </article>";
                break;
            default:
            case "AmongUs":
                echo "<article>
                <h2>Among_Us</h2>                        
                <h3><b>€15,45</b></h3>
                <p><b>Genre:</b> [Deception]</p>
                <p><b>Rating:</b>⭐⭐⭐⭐</p>
                <p><b>Beschrijving</b></p>
                <p>Among Us is een multiplayer party game van InnerSloth, waarin spelers op een ruimteschip worden verdeeld in Crewmates en Impostors. Crewmates moeten samenwerken om taken te voltooien en proberen de Impostors te ontdekken en te elimineren via stemmen. Impostors doen alsof ze Crewmates zijn, saboteren het schip en schakelen Crewmates uit zonder ontdekt te worden. Het spel draait om samenwerking, strategie en bedrog.</p>
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