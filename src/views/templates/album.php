<?= $view('inc.header') ?>
<?= $chunk('slideshow', 'collectionlist')->template('album-slideshow')->setPlaceHolderText('Insert album assets') ?>
<?= $view('inc.page-content') ?>
<?= $chunk('library', 'library')->template('album-images')->setPlaceHolderText('Insert album asset library') ?>
<?= $view('inc.footer') ?>
