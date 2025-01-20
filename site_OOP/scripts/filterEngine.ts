import Film from "./searchEngine";
import films from "./searchEngine";

function filterFilmsByDirector(films: Film[], director: string): Film[] {
    return films.filter(film => film.director.toLowerCase().includes(director.toLowerCase()));
}

function filterFilmsByReleaseYear(films: Film[], releaseYear: number): Film[] {
    return films.filter(film => film.releaseYear === releaseYear);
}

function filterFilmsByGenre(films: Film[], genre: string): Film[] {
    return films.filter(film => film.genre.toLowerCase().includes(genre.toLowerCase()));
}

function filterFilmsByRoomNumber(films: Film[], roomNumber: number): Film[] {
    return films.filter(film => film.roomNumber === roomNumber);
}

function filterFilmsByRating(films: Film[], rating: number): Film[] {
    return films.filter(film => film.rating === rating);
}

export { filterFilmsByDirector, filterFilmsByReleaseYear, filterFilmsByGenre, filterFilmsByRoomNumber, filterFilmsByRating };

// Example usage:
// const filteredByDirector = filterFilmsByDirector(films, "Christopher Nolan");
// const filteredByReleaseYear = filterFilmsByReleaseYear(films, 2021);
// const filteredByGenre = filterFilmsByGenre(films, "Action");
// const filteredByRoomNumber = filterFilmsByRoomNumber(films, 1);
// const filteredByRating = filterFilmsByRating(films, 5);
// console.log(filteredByDirector, filteredByReleaseYear, filteredByGenre, filteredByRoomNumber, filteredByRating);
