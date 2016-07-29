<?= $view('inc.header') ?>

<article role="main">
    <?= $view('inc.page-header') ?>

    <section class="page-list">
        <div class="container">
        <?= $view('inc.features',[
            'title' => 'Lists',
            'items' => 1
        ]) ?>
        </div>
    </section>
</article>

<?= $view('inc.footer') ?>