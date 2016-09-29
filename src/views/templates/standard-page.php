<?= $view('inc.header') ?>

<article id="main" role="main">
     
    <section class="collection-list">
        <?= $view('inc.slideshow-list', [
            'class' => 'page-collection-list',
            'show_title' => false,
            'cols' => 3,
            'placeholder_text' => 'Insert standard page assets'
        ]) ?>
    </section>

    <section id="content" class="container">

        <h1 id="b-page-title"><?= $page->getTitle() ?></h1>
        <?= $chunk('text', 'standfirst') ?>
        <?= $chunk('text', 'bodycopy')->setHtml('<div class="text">{text}</div>') ?>
        <?= $chunk('asset', 'cta')->template('cta')->setPlaceHolderText('Insert Call to Action') ?>
    </section>

</article>

<?= $view('inc.footer') ?>