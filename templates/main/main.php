<?php include __DIR__ . '/../header.php'  ?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="mb-3">Artices</h1>
                <?php foreach ($articles as $article) : ?>
                    <div class="card text-bg-secondary mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><a class="link-warning" href="/articles/<?= $article->getId() ?>"><?= $article->getTitle() ?> </a></h5>
                            <p class="card-text"><?= mb_substr($article->getText(), 0, 300) ?>...</p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="col-md-4">
                <h2>Menu</h2>
                <div class="list-group">
                    <a href="/" class="list-group-item list-group-item-action">Main page</a>
                    <a href="/about-me" class="list-group-item list-group-item-action">About me</a>
                </div>
            </div>

        </div>
    </div>
</main>
<?php include __DIR__ . '/../footer.php' ?>