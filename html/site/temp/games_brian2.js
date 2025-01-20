let Games = ["Skyrim", "TheLastOfUs"];
let GameKeuze = (Games[1]);
console.log(GameKeuze);
if (GameKeuze == "Skyrim") {
    const LastOfUs = document.getElementById("last");
    LastOfUs.style.display = 'none';
} else {
    if (GameKeuze == "TheLastOfUs") {
        const Skyrim = document.getElementById('Skyrim');
        Skyrim.style.display = 'none';
    } else {
        const LastOfUs = document.getElementById("last");
        LastOfUs.style.display = 'none';
    }
}