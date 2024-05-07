<?php
include_once __DIR__ ."/../Models/movie.php";

function printMovies() {    
$movies = json_decode(file_get_contents(__DIR__ ."/../js/movies_db.json"), true);
// var_dump($movies);
$movieList = [];
// $id, $original_language, $original_title, $overview, $poster_path
foreach ($movies as $movie) {
$movieList[] = new Movie($movie['id'], $movie['original_language'], $movie['original_title'], $movie['overview'], $movie['poster_path']);
}
return $movieList;

}