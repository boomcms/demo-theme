<?= $view('inc.header') ?>

<article id="main" role="main">
    <section id="content" class="container">
        <?= $view('inc.back-to-parent', [
            'back_text' => 'Back to'
        ]) ?>
        
        <h1 id="b-page-title"><?= $page->getTitle() ?></h1>
        <?= $chunk('text', 'standfirst') ?>
        <?= $chunk('text', 'bodycopy') ?>
    </section>

    <section class="album-list">
        <div class="slideshow-list album-images child-cols-3">
            <?= $chunk('slideshow', 'collectionlist')->template('list-image')->setPlaceHolderText('Insert album assets') ?>
        </div>
    </section>

    <section class="album-list">
        <?= $view('inc.library-list', [
            'class' => 'album-images',
            'show_title' => false,
            'cols' => 3,
            'item_template' => 'album-images',
            'placeholder_text' => 'Insert album asset library'
        ]) ?>
    </section>
</article>

<?= $view('inc.footer', ['album' => true]) ?>