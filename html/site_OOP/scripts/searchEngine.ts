class Film {
    title: string;
    director: string;
    releaseYear: number;
    genre: string;
    roomNumber: number;
    rating: number;

    constructor(title: string, director: string, releaseYear: number, genre: string, roomNumber: number, rating: number) {
        this.title = title;
        this.director = director;
        this.releaseYear = releaseYear;
        this.genre = genre;
        this.roomNumber = roomNumber;
        this.rating = rating;
    }
}

const films: Film[] = [
    new Film("John Wick 4", "Chad Stahelski", 2023, "Action", 1, 5),
    new Film("A Minecraft Movie", "Peter Sollett", 2022, "Adventure", 2, 4),
    new Film("Dune 2", "Denis Villeneuve", 2023, "Sci-Fi", 3, 4),
    new Film("Avatar 2", "James Cameron", 2022, "Sci-Fi", 4, 5),
    new Film("Spider-Man: No Way Home", "Jon Watts", 2021, "Action", 5, 4),
    new Film("Black Panther: Wakanda Forever", "Ryan Coogler", 2022, "Action", 6, 4),
    new Film("Vaiana 2", "Ron Clements", 2023, "Adventure", 7, 5),
    new Film("Dikkie Dik", "Unknown", 2022, "Kids", 8, 4),
    new Film("Kraven the Hunter", "J.C. Chandor", 2023, "Horror", 9, 4),
    new Film("Jurassic World: Dominion", "Colin Trevorrow", 2022, "Adventure", 10, 4),
    new Film("The Matrix Resurrections", "Lana Wachowski", 2021, "Sci-Fi", 11, 4),
    new Film("Fast & Furious 9", "Justin Lin", 2021, "Action", 12, 4),
    new Film("Ladies Night Schitterend", "Unknown", 2022, "Comedy", 13, 5),
    new Film("Megalopolis", "Francis Ford Coppola", 2023, "Fantasy", 14, 4),
    new Film("Meiden Avond Juf Braaksel 2", "Unknown", 2022, "Comedy", 15, 4),
    new Film("Doctor Strange in the Multiverse of Madness", "Sam Raimi", 2022, "Fantasy", 16, 4),
    new Film("Thor: Love and Thunder", "Taika Waititi", 2022, "Action", 17, 4),
    new Film("The Batman", "Matt Reeves", 2022, "Action", 18, 4),
    new Film("Tenet", "Christopher Nolan", 2020, "Sci-Fi", 19, 4),
    new Film("Wonder Woman 1984", "Patty Jenkins", 2020, "Action", 20, 4),
    new Film("Ghostbusters: Afterlife", "Jason Reitman", 2021, "Comedy", 21, 4),
    new Film("Eternals", "Chloé Zhao", 2021, "Fantasy", 22, 4),
    new Film("Shang-Chi and the Legend of the Ten Rings", "Destin Daniel Cretton", 2021, "Action", 23, 4),
    new Film("Free Guy", "Shawn Levy", 2021, "Comedy", 24, 4),
    new Film("Black Widow", "Cate Shortland", 2021, "Action", 25, 4),
    new Film("No Time to Die", "Cary Joji Fukunaga", 2021, "Action", 26, 4),
    new Film("Venom: Let There Be Carnage", "Andy Serkis", 2021, "Action", 27, 4),
    new Film("Dune 2", "Denis Villeneuve", 2023, "Sci-Fi", 28, 4),
    new Film("The Matrix Resurrections", "Lana Wachowski", 2021, "Sci-Fi", 29, 4),
    new Film("Fast & Furious 10", "Justin Lin", 2023, "Action", 30, 4)
];

function searchFilmsByName(films: Film[], name: string): Film[] {
    return films.filter(film => film.title.toLowerCase().includes(name.toLowerCase()));
}

function linkFilmsToGrid() {
    const filmElements = document.querySelectorAll('.grid-item');
    filmElements.forEach((element, index) => {
        const film = films[index];
        if (film) {
            const h3Element = element.querySelector('h3');
            if (h3Element) {
                h3Element.innerHTML = `
                    ${film.title} <br>
                    ${'⭐'.repeat(film.rating)}<br>
                    Genre: ${film.genre} <br>
                    Prijs: €10
                `;
            }
        }
    });
}

document.addEventListener('DOMContentLoaded', linkFilmsToGrid);

export default Film;
export { films, searchFilmsByName };

// Example usage:
// const searchResults = searchFilmsByName(films, "inception");
// console.log(searchResults);

