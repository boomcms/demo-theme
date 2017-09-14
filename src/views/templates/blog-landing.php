<?= $view('inc.header') ?>
<?= $chunk('slideshow', 'collectionlist')->template('album-slideshow')->setPlaceHolderText('Insert album assets') ?>

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
    'dates' => true,
]) ?>

<?= $view('inc.footer') ?>
