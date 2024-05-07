<?php
include __DIR__ . "/./Views/head.php";
include __DIR__ . "/Controllers/printmovies.php";
$movieList = printMovies();

?>

<main class="container">
    <div class="row">
        <?php foreach ($movieList as $movie) 
        include __DIR__ ."/./Views/movieCard.php";
        ?>
    </div>
</main>



<?php
include __DIR__ . '/Views/footer.php';
?>