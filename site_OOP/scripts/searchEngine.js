let searchInput = document.getElementById('searchInput');

class Film {
    constructor(title, director, releaseYear, genre, roomNumber, rating, price) {
        this.title = title;
        this.director = director;
        this.releaseYear = releaseYear;
        this.genre = genre;
        this.roomNumber = roomNumber;
        this.rating = rating;
        this.price = price;
    }
}

const films = [
    new Film("John Wick 4", "Chad Stahelski", 2023, "Action", 1, 5, 10),
    new Film("A Minecraft Movie", "Peter Sollett", 2022, "Adventure", 2, 1, 10),
    new Film("Dune 2", "Denis Villeneuve", 2023, "Sci-Fi", 3, 4, 10),
    new Film("Avatar 2", "James Cameron", 2022, "Sci-Fi", 4, 2, 12),
    new Film("Spider-Man: No Way Home", "Jon Watts", 2021, "Action", 5, 4, 11),
    new Film("Black Panther: Wakanda Forever", "Ryan Coogler", 2022, "Action", 6, 4, 11),
    new Film("Vaiana 2", "Ron Clements", 2023, "Adventure", 7, 5, 10),
    new Film("Dikkie Dik", "Unknown", 2022, "Kids", 8, 4, 10),
    new Film("Kraven the Hunter", "J.C. Chandor", 2023, "Horror", 9, 4, 10),
    new Film("Jurassic World: Dominion", "Colin Trevorrow", 2022, "Adventure", 10, 4, 10),
    new Film("The Matrix Resurrections", "Lana Wachowski", 2021, "Sci-Fi", 11, 3, 12),
    new Film("Fast & Furious 9", "Justin Lin", 2021, "Action", 12, 4, 10),
    new Film("Ladies Night Schitterend", "Unknown", 2022, "Comedy", 13, 5, 10),
    new Film("Megalopolis", "Francis Ford Coppola", 2023, "Fantasy", 14, 4, 10),
    new Film("Meiden Avond Juf Braaksel 2", "Unknown", 2022, "Comedy", 15, 2, 10),
    new Film("Doctor Strange in the Multiverse of Madness", "Sam Raimi", 2022, "Fantasy", 16, 4, 12),
    new Film("Thor: Love and Thunder", "Taika Waititi", 2022, "Action", 17, 1, 12),
    new Film("The Batman", "Matt Reeves", 2022, "Action", 18, 4, 12),
    new Film("Tenet", "Christopher Nolan", 2020, "Sci-Fi", 19, 3, 12),
    new Film("Wonder Woman 1984", "Patty Jenkins", 2020, "Action", 20, 4, 11),
    new Film("Ghostbusters: Afterlife", "Jason Reitman", 2021, "Comedy", 21, 4, 10),
    new Film("Eternals", "Chloé Zhao", 2021, "Fantasy", 22, 4, 12),
    new Film("Shang-Chi and the Legend of the Ten Rings", "Destin Daniel Cretton", 2021, "Action", 23, 4, 12),
    new Film("Free Guy", "Shawn Levy", 2021, "Comedy", 24, 4, 10),
    new Film("Black Widow", "Cate Shortland", 2021, "Action", 25, 4, 12),
    new Film("No Time to Die", "Cary Joji Fukunaga", 2021, "Action", 26, 4, 12),
    new Film("Venom: Let There Be Carnage", "Andy Serkis", 2021, "Action", 27, 4, 12),
    new Film("Dune", "Denis Villeneuve", 2023, "Sci-Fi", 28, 4, 12),
    new Film("The Matrix", "Lana Wachowski", 2021, "Sci-Fi", 29, 4, 12),
    new Film("Fast & Furious 10", "Justin Lin", 2023, "Action", 3, 2, 12)
];

function searchFilmsByName(films, name) {
    return films.filter(film => film.title.toLowerCase().includes(name.toLowerCase()));
}

function filterFilmsByGenre(films, genre) {
    return films.filter(film => film.genre.toLowerCase() === genre.toLowerCase());
}

function filterFilmsByRating(films, rating) {
    return films.filter(film => film.rating === parseInt(rating, 10));
}

function linkFilmsToGrid(query = '', genre = '', rating = '') {
    const filmElements = document.querySelectorAll('.grid-item');
    filmElements.forEach(element => {
        element.style.display = 'none';
    });

    let filteredFilms = searchFilmsByName(films, query);
    if (genre) {
        filteredFilms = filterFilmsByGenre(filteredFilms, genre);
    }
    if (rating) {
        filteredFilms = filterFilmsByRating(filteredFilms, rating);
    }

    filteredFilms.forEach(film => {
        const element = document.getElementById(film.title.toLowerCase().replace(/[^a-z0-9]/g, ''));
        if (element) {
            element.style.display = 'flex';
            const h3Element = element.querySelector('h3');
            if (h3Element) {
                h3Element.innerHTML = `
                    ${film.title} <br>
                    ${'⭐'.repeat(film.rating)}<br>
                    Genre: ${film.genre} <br>
                    Prijs: €${film.price}
                `;
            }
        }
    });
}

document.addEventListener('DOMContentLoaded', () => {
    linkFilmsToGrid();
    const searchInput = document.getElementById('searchInput');
    const genreFilter = document.getElementById('genreFilter');
    const ratingFilter = document.getElementById('ratingFilter');

    if (searchInput) {
        searchInput.addEventListener('input', () => {
            const searchQuery = searchInput.value;
            const selectedGenre = genreFilter.value;
            const selectedRating = ratingFilter.value;
            linkFilmsToGrid(searchQuery, selectedGenre, selectedRating);
        });
    }

    if (genreFilter) {
        genreFilter.addEventListener('change', () => {
            const searchQuery = searchInput.value;
            const selectedGenre = genreFilter.value;
            const selectedRating = ratingFilter.value;
            linkFilmsToGrid(searchQuery, selectedGenre, selectedRating);
        });
    }

    if (ratingFilter) {
        ratingFilter.addEventListener('change', () => {
            const searchQuery = searchInput.value;
            const selectedGenre = genreFilter.value;
            const selectedRating = ratingFilter.value;
            linkFilmsToGrid(searchQuery, selectedGenre, selectedRating);
        });
    }
});

// Example usage:
// const searchResults = searchFilmsByName(films, "inception");
// console.log(searchResults);

function filterFilmsByDirector(films, director) {
    return films.filter(film => film.director.toLowerCase().includes(director.toLowerCase()));
}

function filterFilmsByReleaseYear(films, releaseYear) {
    return films.filter(film => film.releaseYear === releaseYear);
}

function filterFilmsByGenre(films, genre) {
    return films.filter(film => film.genre.toLowerCase().includes(genre.toLowerCase()));
}

function filterFilmsByRoomNumber(films, roomNumber) {
    return films.filter(film => film.roomNumber === roomNumber);
}

function filterFilmsByRating(films, rating) {
    return films.filter(film => film.rating === parseInt(rating, 10));
}