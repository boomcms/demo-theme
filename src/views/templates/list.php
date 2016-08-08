<?= $view('inc.header') ?>

<article role="main">
    <?= $view('inc.page-header') ?>

    <section class="page-list">
        <div class="container">
        <?= $view('inc.featured',[
            'show_title' => false,
            'item_template' => 'with-image',
            'cols' => 3,
            'class' => 'blog-featured',
            'items' => 4
        ]) ?>
        </div>
    </section>
</article>

<?= $view('inc.footer') ?>