<?= $view('inc.header') ?>

<article id="main" role="main">
    <section id="content" class="container">
        <h1 id="b-page-title"><?= $page->getTitle() ?></h1>

        <?= $chunk('text', 'standfirst') ?>
        <?= $chunk('text', 'bodycopy') ?>
    </section>

    <?= $view('inc.child-pages', [
        'pages'      => $getPages([
            'parent' => $page,
        ]),
        'class'      => 'blog-child-pages',
        'show_title' => false,
        'cols'       => 3
    ]) ?>
</article>

<?= $view('inc.footer') ?>
