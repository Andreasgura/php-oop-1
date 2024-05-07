<div class="col-3">
    <div class="card">
        <img src="<?= $movie->poster_path ?>" class="card-img-top" alt="<?= $movie->original_title ?>"
            style="height: 400px;">
        <div class="card-body">
            <h5 class="card-title"><?= $movie->original_title ?></h5>
            <p class="card-text"><?= $movie->printStars() ?></p>
            <p class="card-text"><?= $movie->overview ?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>