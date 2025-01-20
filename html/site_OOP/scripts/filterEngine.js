//brian
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
    return films.filter(film => film.rating === rating);
}


// Example usage:
// const filteredByDirector = filterFilmsByDirector(films, "Christopher Nolan");
// const filteredByReleaseYear = filterFilmsByReleaseYear(films, 2021);
// const filteredByGenre = filterFilmsByGenre(films, "Action");
// const filteredByRoomNumber = filterFilmsByRoomNumber(films, 1);
// const filteredByRating = filterFilmsByRating(films, 5);
// console.log(filteredByDirector, filteredByReleaseYear, filteredByGenre, filteredByRoomNumber, filteredByRating);
//brian