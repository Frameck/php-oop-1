<?php

class Movie {
    public $title;
    public $year;
    public $rating;
    public $directors;
    public $cast;

    function __construct($_title, $_year, $_rating, $_directors, $_cast) {
        $this->setTitle($_title);
        $this->setYear($_year);
        $this->setRating($_rating);
        $this->setDirectors($_directors);
        $this->setCast($_cast);
    }

    // ******************************************************************
    // Funzioni set
    public function setTitle($newTitle) {
        if ($this->invalidStringValue($newTitle)) return;

        $this->title = $newTitle;
    }

    public function setYear($newYear) {
        if ($this->invalidNumberValue($newYear)) return;

        $this->year = $newYear;
    }

    public function setRating($newRating) {
        if ($this->invalidNumberValue($newRating)) return;

        $this->rating = $newRating;
    }

    public function setDirectors($newDirectors) {
        if ($this->invalidArrayValue($newDirectors)) return;

        $this->directors = $newDirectors;
    }

    public function setCast($newCast) {
        if ($this->invalidArrayValue($newCast)) return;

        $this->cast = $newCast;
    }


    // ******************************************************************
    // Funzioni get
    public function getMovieData($value) {
        return $this->$value;
    }

    // public function getYear() {
    //     return $this->year;
    // }

    // public function getRating() {
    //     return $this->rating;
    // }

    // public function getDirector() {
    //     return $this->director;
    // }

    // public function getCast() {
    //     return $this->cast;
    // }
    

    // ******************************************************************
    // Funzioni per la validazione dei dati

    /** Ritorna true se il valore è vuoto, è un numero o è null */
    public function invalidStringValue($value) {
        return empty($value) || is_numeric($value) || is_null($value);
    }

    /** Ritorna true se il valore è vuoto, non è array o è null */
    public function invalidArrayValue($value) {
        return empty($value) || !is_array($value) || is_null($value);
    }

    /** Ritorna true se il valore è vuoto, non è numero o è null */
    public function invalidNumberValue($value) {
        return empty($value) || !is_numeric($value) || is_null($value);
    }
}

?>