<?php
    public class FilmToevogen
    {
        private $title;
        private $director;
        private $releaseYear;
        private $genre;

        public function __construct($title, $director, $releaseYear, $genre) {
            $this->title = $title;
            $this->director = $director;
            $this->releaseYear = $releaseYear;
            $this->genre = $genre;
        }

        public function getTitle() {
            return $this->title;
        }

        public function getDirector() {
            return $this->director;
        }

        public function getReleaseYear() {
            return $this->releaseYear;
        }

        public function getGenre() {
            return $this->genre;
        }

        public function addFilm() {
            // Code to add the film to the database or any storage
            // For example:
            // $db = new DatabaseConnection();
            // $db->query("INSERT INTO films (title, director, releaseYear, genre) VALUES ('$this->title', '$this->director', '$this->releaseYear', '$this->genre')");
        }
    }
?>


















