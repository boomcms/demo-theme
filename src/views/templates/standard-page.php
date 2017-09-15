<?= $view('inc.header') ?>
<?= $chunk('slideshow', 'collectionlist')->template('list')->setPlaceHolderText('Insert standard page assets') ?>
<?= $view('inc.page-content') ?>
<?= $view('inc.footer') ?>
