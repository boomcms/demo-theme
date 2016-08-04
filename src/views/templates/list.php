<?= $view('inc.header') ?>

<article role="main">
    <?= $view('inc.page-header') ?>

    <section class="page-list">
        <div class="container">
        <?= $view('inc.features',[
            'title' => 'Lists',
            'item_template' => '4col',
            'items' => 4
        ]) ?>
        </div>
    </section>
</article>

<?= $view('inc.footer') ?>