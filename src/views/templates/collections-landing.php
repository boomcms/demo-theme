<?= $view('inc.header') ?>

<article id="main" role="main">
    <section id="content" class="container">
        <h1 id="b-page-title"><?= $page->getTitle() ?></h1>
        <?= $chunk('text', 'standfirst') ?>
        <?= $chunk('text', 'bodycopy') ?>
    </section>

    <?= $view('inc.slideshow') ?>

    <div class="container">
        <?= $chunk('text', 'bodycopy') ?>
    </div>

    <?= $view('inc.child-pages', [
        'pages' => $getPages([
            'parent' => $page,
            'visibleinnavigation' => true,
            ]),
        'class'      => 'child-collections',
        'show_title' => false,
        'cols'       => 3,
        'dates'      => false,
    ]) ?>
</article>

<?= $view('inc.footer') ?>
