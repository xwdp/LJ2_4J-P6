-- import this to phpmyadmin to make it work with the site


-- CREATE DATABASE films;
-- USE films;

-- 	CREATE TABLE film(

-- filmid INT PRIMARY KEY NOT NULL,
-- filmnaam VARCHAR(50),
-- filmgenre VARCHAR(50),
-- filmrating VARCHAR(10),
-- filmbeschrijving VARCHAR(100),
-- releasedate VARCHAR(50),
-- afbeelding VARCHAR(255);
-- );
-- SELECT * FROM film

-- INSERT INTO film VALUES(1, 'John Wick Chapter 4', 'Action', NULL, NULL);
-- INSERT INTO film VALUES(2, 'A Minecraft Movie', 'Adventure', NULL, NULL);
-- INSERT INTO film VALUES(3, 'Dune Part Two', 'Sci-fi', NULL, NULL);
-- INSERT INTO film VALUES(4, 'Vaiana 2', 'Adventure', NULL, NULL);
-- INSERT INTO film VALUES(5, 'Dikkie Dik Een Nieuwe Vriend Voor Dikkie Dik', 'Kids', NULL, NULL);
-- INSERT INTO film VALUES(6, 'Kraven The Hunter', 'Horror', NULL, NULL);
-- INSERT INTO film VALUES(7, 'Schitterend', 'Comedy', NULL, NULL);
-- INSERT INTO film VALUES(8, 'Megalopolis', 'Fantasy', NULL, NULL);
-- INSERT INTO film VALUES(9, 'Juf Braaksel', 'Comedy', NULL, NULL);
-- INSERT INTO film VALUES(10, 'Pushpa 2', 'Action', NULL, NULL, '17 maart 2025');
-- INSERT INTO film VALUES(11, 'Right People Wrong Place', 'Comedy', NULL, NULL, '14 april 2025');
-- INSERT INTO film VALUES(12, 'Wicked', 'Fantasy', NULL, NULL, '31 mei 2026');


-- SELECT * FROM film;

-- CREATE TABLE users (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     username VARCHAR(255) NOT NULL UNIQUE,
--     password VARCHAR(255) NOT NULL
-- );
-- SELECT * FROM users;

-- CREATE DATABASE reservering;
USE reservering;
-- CREATE TABLE reserveringen(

-- reserveringid INT AUTO_INCREMENT PRIMARY KEY, 
-- naam VARCHAR(50),
-- email VARCHAR(50),
-- film VARCHAR(50),
-- datum VARCHAR(20),
-- locatie VARCHAR(30),
-- aantalpersonen VARCHAR(2)
-- );
SELECT * FROM reserveringen