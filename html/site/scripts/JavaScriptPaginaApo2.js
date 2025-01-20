let Games = ["CSGO", "CounterStrike2"];
let GameKeuze = (Games[1]);
console.log(GameKeuze);
if (GameKeuze == "CounterStrike2") {
    const CounterStrike2 = document.getElementById("CS");
    CounterStrike2.style.display = 'none';
} else {
    if (GameKeuze == "CounterStrike2") {
        const CounterStrike2 = document.getElementById('CS2');
        CounterStrike2.style.display = 'none';
    } else {
        const CSGO = document.getElementById("CSGO");
        CSGO.style.display = 'none';
    }
}