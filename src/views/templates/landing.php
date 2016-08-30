<?= $view('inc.header') ?>

<article role="main">
    <?= $view('inc.page-header') ?>

    <section class="features container">
        <section id="content" class=" main">
        <?= $chunk('text', 'standfirst') ?>
        <?= $chunk('text', 'bodycopy') ?>
        </section>
          
    </section>
</article>

<?= $view('inc.footer') ?>