<div class="col-3">
    <div class="card">
        <img src="<?= $book->thumbnailUrl ?>" class="card-img-top" alt="<?= $book->title ?>"
            style="height: 400px;">
        <div class="card-body">
            <h5 class="card-title"><?= $book->title ?></h5>
            <p class="card-text"><?= $book->longDescription ?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>