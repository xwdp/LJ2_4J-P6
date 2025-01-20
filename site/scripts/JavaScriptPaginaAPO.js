// Maak een object aan om spelgegevens op te slaan
let games = {
    "CounterStrike": {
        name: "Counter-Strike",
        genre: "Multiplayer, First Person Shooter",
        year: 2006,
        rating: "PEGI 18",
        platforms: ["PC", "iOS", "Android", "Xbox One", "PlayStation 4"]
    },
    "CyberPunk2077": {
        name: "CyberPunk 2077",
        genre: "RPG",
        year: 2020,
        rating: "PEGI 18",
        platforms: ["PC", "iOS", "Android"]
    }
};

// Variabele om het huidige spel op te slaan
let currentGame = 'CounterStrike';

// Functie om het spel te wijzigen en informatie te geven
function changeGame(gameName) {
    // Gebruik een switch statement om het geselecteerde spel te wijzigen
    switch(gameName) {
        case 'CounterStrike':
        case 'CyberPink2077':
            currentGame = gameName;
            showGameInfo(games[gameName]);
            console.log("Het geselecteerde spel is: " + games[currentGame].name);
            break;
        default:
            console.log("Het geselecteerde spel bestaat niet.");
    }
}

// Functie om spelinformatie weer te geven
function showGameInfo(gameData) {
    // Controleer of de spelgegevens bestaan
    if (gameData) {
        // Toon spelinformatie met interpolatie
        console.log("Naam: " + gameData.name);
        console.log("Genre: " + gameData.genre);
        console.log("Jaar: " + gameData.year);
        console.log("Rating: " + gameData.rating);
        console.log("Platforms: " + gameData.platforms.join(', '));
    }
}

// Toon standaard spel
changeGame(currentGame);
