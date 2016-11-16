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
        <?= $chunk('text', 'standfirst') ?>

        <time class="b-page-visibility" datetime="<?= $page->getVisibleFrom()->format('Y-m-d H:i:s') ?>" pubdate>
            <?= $page->getVisibleFrom()->format('jS F Y') ?>
        </time>

        <?= $chunk('text', 'bodycopy') ?>
    </section>

    <?= $view('inc.related-pages') ?>
</article>

<?= $view('inc.footer') ?>