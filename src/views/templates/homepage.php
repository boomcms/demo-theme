<?= $view('inc.header') ?>

<article id="main" role="main">
    <?= $view('inc.slideshow') ?> 

    <section id="content" class="container">
        <h1 id="b-page-title"><?= $page->getTitle() ?></h1>
        <?= $chunk('text', 'standfirst') ?>
        <?= $chunk('text', 'bodycopy') ?>
    </section>

    <section id="featured">
        <?= $view('inc.featured',[
            'show_title' => false,
            'items' => 6,
            'item_template' => 'with-image',
            'class' => 'homepage-featured',
            'cols'  => 3
        ]) ?>
    </section>

    <section class="featured-collection container">
        <?= $view('inc.asset-collection',[
             'items' => 1,
             'cols' => 1,
             'class' => 'showcase-collection',
             'chunk_name' => 'collection',
             'item_template' => '',
             'placeholder_text' => 'Insert a Collection'
        ]) ?>
    </section>

    <section class="collection-list container">
        <?= $view('inc.slideshow-list', [
            'class' => 'home-collection-list',
            'show_title' => true,
            'cols' => 3
        ]) ?>
    </section>

    <section class="featured-collection container">
        <?= $view('inc.asset-collection',[
             'items' => 1,
             'cols' => 1,
             'class' => 'showcase-collection2',
             'chunk_name' => 'collection_2', //must not colide with other instances
             'item_template' => '',
             'placeholder_text' => 'Insert a Collection'
        ]) ?>
    </section>

    <div class="container">
        <?= $chunk('text', 'standfirst2')->setPlaceholderText('Insert title')->setHtml('<h3>{text}</h3>') ?>
        <?= $chunk('text', 'bodycopy2')->setHtml('<div class="content">{text}</div>') ?>
    </div>
</article>

<?= $view('inc.footer-homepage') ?>
