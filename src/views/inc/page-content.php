<article role="main" class="page-content">
    <h1 id="b-page-title"><?= $page->getTitle() ?></h1>
    <?= $chunk('text', 'standfirst') ?>

    <?php if (($time ?? false) === true): ?>
        <time datetime="<?= $page->getVisibleFrom()->format('w3c') ?>">
            <?= $page->getVisibleFrom()->format('d F Y') ?>
        </time>
    <?php endif ?>
    
    <?= $chunk('text', 'bodycopy') ?>
</article>