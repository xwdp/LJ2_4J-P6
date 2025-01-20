<?php 
session_start();
include "head.php";
?>
<link rel="stylesheet" href="css/slideshow.css">
</head>
<body>
    <?php if (isset($_SESSION['login_success']) && $_SESSION['login_success']): ?>
        <p>Login successful.</p>
        <?php unset($_SESSION['login_success']); ?>
    <?php endif; ?>
    <header>
        <nav class="logo">
            <a href="index.php"><img id="logo" src="img/logo/Gemini_Generated_Image_upriieupriieupri.jpeg" alt="logo GameStars"></a>
        </nav>
        <h1 id="logonaam">Mbo Cinnemas</h1>
        <nav class="topnav">
            <a class="active" href="index.php">Home</a>
            <a href="films.php">Films</a>    
            <a href="reserveren.php">Reserveren</a>   
            <a href="agenda.php">Agenda</a>   
            <a href="upcomming.php">Upcoming</a>
            <a href="login-page.php">account</a>
        </nav>
    </header>
    <main>
        <section>
            <article>
                <div class="multi-slideshow-container">
                    <div class="slideshow-container slideshow-container-1">
                        <div class="mySlides fade">
                            <h3 class="numbertext">1 / 3</h3>
                            <a href="johnwick.html"><img class="saleBanner" src="img/films/81fk-N7tvbL._AC_UF894,1000_QL80_.jpg" alt="jhon wick 4"></a>
                            <p class="text">john wick 4</p>
                        </div>
                        <div class="mySlides fade">
                            <h3 class="numbertext">2 / 3</h3>
                            <a href="minecraft.html"><img class="saleBanner" src="img/films/A_Minecraft_Movie_poster.jpg" alt="minecraft"></a>
                            <p class="text">Minecraft</p>
                        </div>
                        <div class="mySlides fade">
                            <h3 class="numbertext">3 / 3</h3>
                            <a href="dune.html"><img class="saleBanner" src="img/films/Dune-Part-Two-Dolby-Poster.webp" alt="dune 2"></a>
                            <p class="text">Dune 2</p>
                        </div>
                        <a class="prev" onclick="plusSlides1(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides1(1)">&#10095;</a>
                    </div>
                    <div class="slideshow-container slideshow-container-2">
                        <div class="mySlides fade">
                            <h3 class="numbertext">1 / 3</h3>
                            <a href="vaiana2.html"><img class="saleBanner" src="img/films/Kids_Weekend__Vaiana_2.webp" alt="Kids Weekend Vaiana 2"></a>
                            <p class="text">Minecraft</p>
                        </div>
                        <div class="mySlides fade">
                            <h3 class="numbertext">2 / 3</h3>
                            <a href="dikkiedik.html"><img class="saleBanner" src="img/films/Kleuterbios__Een_Nieuwe_Vriend_voor_Dikkie_Dik.avif" alt="dikkie dik"></a>
                            <p class="text">Hot Sales Nu!</p>
                        </div>
                        <div class="mySlides fade">
                            <h3 class="numbertext">3 / 3</h3>
                            <a href="Kraven.html"><img class="saleBanner" src="img/films/Kraven_the_Hunter.webp" alt="Kraven_the_Hunter"></a>
                            <p class="text">Kraven the Hunter</p>
                        </div>
                        <a class="prev" onclick="plusSlides2(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides2(1)">&#10095;</a>
                    </div>
                    <div class="slideshow-container slideshow-container-3">
                        <div class="mySlides fade">
                            <h3 class="numbertext">1 / 3</h3>
                            <a href="ladies.html"><img class="saleBanner" src="img/films/Ladies_Night__Schitterend.avif" alt="ladies Night Schitterend"></a>
                            <p class="text">Ladies Night Schitterend</p>
                        </div>
                        <div class="mySlides fade">
                            <h3 class="numbertext">2 / 3</h3>
                            <a href="megalopolis.html"><img class="saleBanner" src="img/films//Megalopolis.webp" alt="Megalopolis"></a>
                            <p class="text">Megalopolis</p>
                        </div>
                        <div class="mySlides fade">
                            <h3 class="numbertext">3 / 3</h3>
                            <a href="meidenavond.html"><img class="saleBanner" src="img/films/MEIDEN_Avond__Juf_Braaksel_2.webp" alt="MEIDEN Avond Juf Braaksel 2"></a>
                            <p class="text">MEIDEN Avond Juf Braaksel 2</p>
                        </div>
                        <a class="prev" onclick="plusSlides3(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides3(1)">&#10095;</a>
                    </div>
                </div>
                <div style="text-align:center; display: flex; justify-content: space-between;">
                    <div>
                        <span class="dot dot-1" onclick="currentSlide1(1)"></span>
                        <span class="dot dot-1" onclick="currentSlide1(2)"></span>
                        <span class="dot dot-1" onclick="currentSlide1(3)"></span>
                    </div>
                    <div>
                        <span class="dot dot-2" onclick="currentSlide2(1)"></span>
                        <span class="dot dot-2" onclick="currentSlide2(2)"></span>
                        <span class="dot dot-2" onclick="currentSlide2(3)"></span>
                    </div>
                    <div>
                        <span class="dot dot-3" onclick="currentSlide3(1)"></span>
                        <span class="dot dot-3" onclick="currentSlide3(2)"></span>
                        <span class="dot dot-3" onclick="currentSlide3(3)"></span>
                    </div>
                </div>
            </article>   
        </section>    
    </main>
    <?php 
    include "footer.php";
    ?>
</body>
</html>