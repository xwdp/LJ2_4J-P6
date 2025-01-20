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
    //in game als je die aan past naar BattleFront zal je die zien en met ark laat hij ark zien (FUNNY DINO GAME) en of leeg is ook ark zien
$game = "";


if ($game = "ark") {
    echo    "<article>
    <h2>Ark</h2>                        
    <h3><b>€79,45</b></h3>
    <p><b>Genre:</b> [openworld]</p>
    <p><b>Rating:</b>⭐⭐⭐</p>
    <p><b>Beschrijving</b></p>
    <p>Als een naakte, bevroren en uitgehongerde man of vrouw aan de oevers van een mysterieus eiland genaamd ARK, moet je jagen, grondstoffen verzamelen, knutselen, cultiveren, technologie onderzoeken en gebouwen bouwen om de elementen te weerstaan.</p>
</article>";
}elseif ($game = "BattleFront") {
    echo    "<article>
                <h2>battlefront</h2>                        
                <h3><b>€29,49</b></h3>
                <p><b>Genre:</b> [shooter]</p>
                <p><b>Rating:</b>⭐</p>
                <p><b>Beschrijving</b></p>
                <p>Star Wars: Battlefront is een computerspel waarmee je gevechten in het fictieve Star Wars-universum in Battlefield-stijl kunt naspelen. De game kan gespeeld worden als first-person shooter of third-person shooter</p>
            </article>";
}else
{
    echo    "<article>
                <h2>Ark</h2>                        
                <h3><b>€79,45</b></h3>
                <p><b>Genre:</b> [openworld]</p>
                <p><b>Rating:</b>⭐⭐⭐</p>
                <p><b>Beschrijving</b></p>
                <p>Als een naakte, bevroren en uitgehongerde man of vrouw aan de oevers van een mysterieus eiland genaamd ARK, moet je jagen, grondstoffen verzamelen, knutselen, cultiveren, technologie onderzoeken en gebouwen bouwen om de elementen te weerstaan.</p>
            </article>";
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