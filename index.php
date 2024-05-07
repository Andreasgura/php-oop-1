<?php
include __DIR__ . "/./Views/head.php";
include __DIR__ . "/Controllers/printmovies.php";
$movieList = printMovies();

?>

<main class="container">
    <div class="row">
        <?php foreach ($movieList as $movie) { ?>
            <div class="col-4">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $movie->original_title ?></h5>
                        <p class="card-text"><?= $movie->overview ?></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</main>



<?php
include __DIR__ . '/Views/footer.php';
?>