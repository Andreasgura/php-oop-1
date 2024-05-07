<?php
class Movie {
    public $id;
    public $original_language;
    public $original_title;
    public $overview;
    public $popularity;
    public $poster_path;
    public $release_date;
    public $title;
    public $vote_average;
    public $vote_count;

    public function __construct($id, $original_language, $original_title, $overview, $poster_path) {
        $this->id = $id;
        $this->original_language = $original_language;
        $this->original_title = $original_title;
        $this->overview = $overview;
        $this->poster_path = $poster_path;
    }
    public function printStars($vote_averege) {
        $stars = round($this->vote_average / 2);
        $template = "";
        for ($i = 0; $i < $stars; $i++) {
            $template .= "<i class='fas fa-star'></i>";
        }
        return $template;
    }    

}