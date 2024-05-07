<?php
include __DIR__ . "/./Views/head.php";
include __DIR__ . "/Controllers/printmovies.php";
$movieList = printMovies();
$bookList = printBooks();

?>

<main>
    <section class="container mt-5">
        <h2 class="text-center">Lista dei film</h2>
        <div class="container">
            <div class="row">
                <?php foreach ($movieList as $movie)
                    include __DIR__ . "/./Views/movieCard.php";
                ?>
            </div>
        </div>
    </section>

    <section class="container mt-5">
        <h2 class="text-center">Lista dei libri</h2>
        <div class="container">
            <div class="row">
                <?php foreach ($bookList as $book)
                    include __DIR__ . "/./Views/bookCard.php";
                ?>
            </div>
        </div>
    </section>


</main>



<?php
include __DIR__ . '/Views/footer.php';
?>