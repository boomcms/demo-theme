<?= $view('inc.header') ?>

<article id="main" role="main">
    <?= $view('inc.slideshow') ?>

    <div class="container">
        <h1 id="b-page-title"><?= $page->getTitle() ?></h1>
        <?= $chunk('text', 'standfirst') ?>
        <?= $chunk('text', 'bodycopy') ?>
    </div>

    <?= $view('inc.child-pages', [
        'pages' => $getPages([
            'parent' => $page,
            'visibleinnavigation' => true,
        ]),
    ]) ?>
</article>

<?= $view('inc.footer') ?>
