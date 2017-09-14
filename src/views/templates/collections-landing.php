<?= $view('inc.header') ?>
<?= $view('inc.slideshow') ?>

<article role="main" class="container">
    <h1 id="b-page-title"><?= $page->getTitle() ?></h1>
    <?= $chunk('text', 'standfirst') ?>
    <?= $chunk('text', 'bodycopy') ?>
</article>

<?= $view('inc.child-pages', [
    'pages' => $getPages([
        'parent' => $page,
        'visibleinnavigation' => true,
    ]),
]) ?>

<?= $view('inc.footer') ?>
