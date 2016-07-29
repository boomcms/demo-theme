<?= $view('inc.header') ?>

<article role="main">
    <?= $view('inc.page-header') ?>

    <section class="features">
        <div class="container">
        <?= $view('inc.features',[
            'title' => 'Features',
            'items' => 6,
            'class' => 'landing-featured'
        ]) ?>
        </div>
    </section>
</article>

<?= $view('inc.footer') ?>