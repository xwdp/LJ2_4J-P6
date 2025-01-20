<?php include "head.php"?>
       <link rel="stylesheet" href="css/product.css">
        <link rel="stylesheet" href="css/search.css">

       <link rel="icon" href="img/logo/Gemini_Generated_Image_upriieupriieupri.jpeg">

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
                        <a href="upcomming.php">Upcoming</a>
                        <a class="active" href="zoeken.php">Zoeken🔎</a>
                    </nav>
    </header>

    <main>
        
        <section>
            <form action="/search" method="get">
                <input class="search" type="text" name="q" placeholder="Search🔎">
                <button class="search" type="submit">Search🔎</button>
            </form>
        </section>

        
    </main> 

    <?php 
       include "footer.php"
       ?>
</body>
</html>
