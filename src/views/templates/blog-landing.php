<?= $view('inc.header') ?>

<article role="main">
    <?= $view('inc.page-header') ?>

      <section id="content" class=" main">
        <?= $chunk('text', 'standfirst') ?>
        <?= $chunk('text', 'bodycopy') ?>
        </section>
</article>

<?= $view('inc.footer') ?>