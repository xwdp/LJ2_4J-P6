CREATE DATABASE films;
USE films;

CREATE TABLE film (
    filmid INT PRIMARY KEY NOT NULL,
    filmnaam VARCHAR(50),
    filmgenre VARCHAR(50),
    filmrating VARCHAR(10),
    filmbeschrijving VARCHAR(100),
    releasedate VARCHAR(50)
);

INSERT INTO film (filmid, filmnaam, filmgenre, filmrating, filmbeschrijving, releasedate) VALUES
(1, 'John Wick Chapter 4', 'Action', NULL, NULL, NULL),
(2, 'A Minecraft Movie', 'Adventure', NULL, NULL, NULL),
(3, 'Dune Part Two', 'Sci-fi', NULL, NULL, NULL),
(4, 'Vaiana 2', 'Adventure', NULL, NULL, NULL),
(5, 'Dikkie Dik Een Nieuwe Vriend Voor Dikkie Dik', 'Kids', NULL, NULL, NULL),
(6, 'Kraven The Hunter', 'Horror', NULL, NULL, NULL),
(7, 'Schitterend', 'Comedy', NULL, NULL, NULL),
(8, 'Megalopolis', 'Fantasy', NULL, NULL, NULL),
(9, 'Juf Braaksel', 'Comedy', NULL, NULL, NULL),
(10, 'Pushpa 2', 'Action', NULL, NULL, '17 maart 2025'),
(11, 'Right People Wrong Place', 'Comedy', NULL, NULL, '14 april 2025'),
(12, 'Wicked', 'Fantasy', NULL, NULL, '31 mei 2026');

SELECT * FROM film;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
