<?php
include_once __DIR__ . "/../Models/movie.php";
include_once __DIR__ . "/../Models/book.php";

function printMovies()
{
    $movies = json_decode(file_get_contents(__DIR__ . "/../js/movies_db.json"), true);
    // var_dump($movies);
    $movieList = [];
    // $id, $original_language, $original_title, $overview, $poster_path
    foreach ($movies as $movie) {
        $movieList[] = new Movie($movie['id'], $movie['original_language'], $movie['original_title'], $movie['overview'], $movie['poster_path'], $movie['vote_average']);
    }
    return $movieList;

};

function printBooks()
{
    $books = json_decode(file_get_contents(__DIR__ . "/../js/books_db.json"), true);
    // var_dump($movies);
    $bookList = [];
    // $$title, $isbn, $pageCount, $thumbnailUrl, $longDescription, $authors
    foreach ($books as $book) {
        $bookList[] = new Book($book['title'], $book['isbn'], $book['pageCount'], $book['thumbnailUrl'], $book['longDescription'], $book['authors']);
    }
    return $bookList;
}