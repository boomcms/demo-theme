<?= $view('inc.header') ?>

<article role="main" class="container">
    <h1 id="b-page-title"><?= $page->getTitle() ?></h1>
    <?= $chunk('text', 'standfirst') ?>
    <?= $chunk('text', 'bodycopy') ?>
</article>

<?= $view('inc.footer') ?>