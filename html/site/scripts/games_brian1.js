let Games = ["terraria", "fortnite"];
let GameKeuze = (Games[0]);

switch (GameKeuze) {
    case Games[0]:
        const fortnite = document.getElementById("fortnite");
        fortnite.style.display = 'none';
        break;
    
    case Games[1]:
        const terraria = document.getElementById("terraria");
        terraria.style.display = 'none';
    break;

    default:
        const defaultFortnite = document.getElementById("fortnite");
        defaultFortnite.style.display = 'none';
        break;
}
 

// Zorg dat je ook in de console laat zien welke game er getoond wordt op de pagina. 

// Maak variabelen om de game data op te slaan.  

// Door de waarde van een variabele te veranderen kan een andere game getoond worden. 

// Gebruik hiervoor een switch-statement. 

// Maak gebruik van interpolatie om de data van de variabelen te tonen. 

 

// Zorg dat je ook in de console laat zien welke game er getoond wordt op de pagina. 
