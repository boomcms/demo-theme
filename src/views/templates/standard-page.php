<?= $view('inc.header') ?>
<?= $chunk('slideshow', 'collectionlist')->template('album-slideshow')->setPlaceHolderText('Insert standard page assets') ?>
<?= $view('inc.page-content') ?>
<?= $view('inc.footer') ?>
