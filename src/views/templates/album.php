<?= $view('inc.header') ?>
<?= $chunk('slideshow', 'collectionlist')->template('album-slideshow')->setPlaceHolderText('Insert album assets') ?>

<article role="main" class="container">
    <h1 id="b-page-title"><?= $page->getTitle() ?></h1>
    <?= $chunk('text', 'standfirst') ?>
    <?= $chunk('text', 'bodycopy') ?>
</article>

<?= $chunk('library', 'library')->template('album-images')->setPlaceHolderText('Insert album asset library') ?>
<?= $view('inc.footer') ?>
