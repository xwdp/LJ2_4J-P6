<?php include "head.php"?>
       <link rel="stylesheet" href="css/grid.css">
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
                        <a href="reserveren.php">Reserveren</a>   
                        <a href="agenda.php">Agenda</a>   
                        <a class="active" href="upcomming.php">Upcoming</a>
                        <a href="zoeken.php">Zoeken🔎</a>
                    </nav>
    </header>

    <main>

        <section class="container">

            <article class="grid-container">

                <article class="grid-item">
                    <a href="upcomming/pushpa.html">
                        <img src="img/films/Pushpa_2__The_Rule.avif" alt="Pushpa_2__The_Rule">
                    </a>
                    <a class="textgridcolor" href="upcomming/pushpa.html">
                        <h3>
                            Pushpa 2 <br>
                            ⭐⭐⭐⭐⭐<br>
                            Genre: Action<br>
                            Release date: <br>
                            17 maart 2025
                    </a>
                    </h3>

                </article>

                <article class="grid-item">
                    <a href="upcomming/wrongpeeps.html">
                        <img src="img/films/RM___Right_People_Wrong_Place.avif" alt="">
                    </a>
                    <a class="textgridcolor" href="upcomming/wrongpeeps.html">
                        <h3>
                            Right People Wrong Place <br>
                            ⭐⭐⭐⭐<br>
                            Genre: Comedy<br>
                            Release date: <br>
                            14 april 2025
                    </a>

                    </h3>

                </article>

                <article class="grid-item">
                    <a href="upcomming/wicked.html">
                        <img src="img/films/Wicked.webp" alt="wicked">
                    </a>
                    <a class="textgridcolor" href="upcomming/wicked.html">
                        <h3>
                            Wicked<br>
                            ⭐⭐⭐⭐<br>
                            Genre: fantasy <br>
                            Release date: <br>
                            31 mei 2026
                    </a>
                    </h3>

                </article>
            </section>
              

    </main>
        <?php 
       include "footer.php"
       ?>
</body>

</html>