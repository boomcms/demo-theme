<?= $view('inc.header') ?>

<article id="main" role="main">

        <section class="collection-list">
        <?= $view('inc.slideshow-list', [
            'class' => 'page-collection-list',
            'show_title' => false,
            'cols' => 3
        ]) ?>
    </section>

      <section id="content" class="container">
        <?= $chunk('text', 'standfirst') ?>
        <?= $chunk('text', 'bodycopy') ?>
        </section>
</article>

<?= $view('inc.footer') ?>