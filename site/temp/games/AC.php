[11:36] Apo Panagiotidis
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="B. de Haan & A. Panagiotidis">
    <meta name="description" content="een game revieuw sites gemaakt door gamers voor gamers">
    <meta name="keywords" content="revieuws, games, red dead, rdr2, red dead 2, red dead redemption 2, red dead redemption, stardew, stardew valley, sv, gamestars, gs, sale, summer sale, merch, celeste, etselec, trans game, trans girl character, rpg, platformer, openworld, sandbox, rating sites, Arthur Morgan, Madeline, Roger Clark, the player, govener ">
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
        //in game als je die aan past naar UFC zal je die zien en met AssasinsCreed laat hij Assasins Creed zien en of leeg is ook AssasinsCreed zien
        $game = "";


        if ($game = "Assasins_Creed") {
            echo "<article>
    <h2>Assasins Creed</h2>                        
    <h3><b>€55,45</b></h3>
    <p><b>Genre:</b> [openworld]</p>
    <p><b>Rating:</b>⭐⭐⭐⭐</p>
    <p><b>Beschrijving</b></p>
    <p>Assassin's Creed is een actie-avonturengame ontwikkeld door Ubisoft. In dit spel beleef je historische avonturen door de herinneringen van je voorouders te herleven. Je speelt als een lid van een geheim genootschap van Assassijnen die strijden tegen de Tempeliers.</p>
</article>";
        } elseif ($game = "UFC") {
            echo "<article>
                <h2>UFC</h2>                        
                <h3><b>€29,49</b></h3>
                <p><b>Genre:</b> [Vechtspel]</p>
                <p><b>Rating:</b>⭐⭐⭐⭐⭐</p>
                <p><b>Beschrijving</b></p>
                <p>UFC is een vechtspel gebaseerd op de Ultimate Fighting Championship, waarin spelers als professionele mixed martial artists strijden in realistische MMA-gevechten. Het spel biedt een breed scala aan vechters, elk met unieke vaardigheden en vechtstijlen. Spelers kunnen in verschillende spelmodi, zoals carrièremodus en online multiplayer, vechten. De gameplay draait om strategisch gebruik van stoten, trappen, worpen, en submissies om de tegenstander te verslaan, met nadruk op realisme en technische precisie.</p>
            </article>";
        } else {
            echo "<article>
    <h2>Assasins Creed</h2>                        
    <h3><b>€55,45</b></h3>
    <p><b>Genre:</b> [openworld]</p>
    <p><b>Rating:</b>⭐⭐⭐⭐</p>
    <p><b>Beschrijving</b></p>
    <p>Assassin's Creed is een actie-avonturengame ontwikkeld door Ubisoft. In dit spel beleef je historische avonturen door de herinneringen van je voorouders te herleven. Je speelt als een lid van een geheim genootschap van Assassijnen die strijden tegen de Tempeliers.</p>
</article>";
        }

        ?>

    </main>

    <footer>
        <article>
            <h6 class="disclaimer">disclaimer: de redactie is niet verantwoordelijk voor fouten in de informatie</h6>
        </article>
    </footer>

</body>

</html>