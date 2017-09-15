<?= $view('inc.header') ?>
<?= $chunk('slideshow', 'collectionlist')->template('album-slideshow')->setPlaceHolderText('Insert album assets') ?>
<?= $view('inc.page-content') ?>

<?= $view('inc.page-list', [
    'pages' => $getPages([
        'parent' => $page,
        'visibleinnavigation' => true,
    ]),
    'dates' => true,
]) ?>

<?= $view('inc.footer') ?>
