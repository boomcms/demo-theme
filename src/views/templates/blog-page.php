<?= $view('inc.header') ?>

<article id="main" role="main" >
    <section class="collection-list">
        <?= $view('inc.slideshow-list', [
            'class' => 'page-collection-list',
            'show_title' => false,
            'cols' => 3,
            'carousel' => true,
            'placeholder_text' => 'Insert blog post assets'
        ]) ?>
    </section>

    <section id="content" class="container">
        <?= $view('inc.back-to-parent', [
            'back_text' => 'Back to'
        ]) ?>

        <h1 id="b-page-title"><?= $page->getTitle() ?></h1>

        <h2 class="date">
            <time datetime="<?= $page->getVisibleFrom()->format('Y-m-d H:i:s') ?>" pubdate>
                <?= $page->getVisibleFrom()->format('d M Y') ?>
            </time>
        </h2>

        <?= $chunk('text', 'standfirst')->setHtml('<div class="standfirst">{text}</div>') ?>
        <?= $chunk('text', 'bodycopy')->setHtml('<div class="text">{text}</div>') ?>
        <?= $chunk('asset', 'cta')->template('cta')->setPlaceHolderText('Insert Call to Action') ?>
    </section>

    <?= $view('inc.related-pages', [
        'pages' => $getPages([
            'parent' => $page->getParent(),
            'visibleinnavigation' => true,
            'limit' => 3
        ]),
    ]) ?>
</article>

<?= $view('inc.footer') ?>