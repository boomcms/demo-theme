<?= $view('inc.header') ?>

<article id="main" role="main">

    <section id="content" class="container">
        
        <h1 id="b-page-title"><?= $page->getTitle() ?></h1>
        <?= $chunk('text', 'standfirst')->setHtml('<h2>{text}</h2>') ?>
    </section>
    <?= $view('inc.slideshow') ?> 
    <section id="bodytext" class="container">
        
        <?= $chunk('text', 'bodycopy')->setHtml('<main>{text}</main>') ?>
    </section>

            <?= $view('inc.child-pages', [
                'pages' => $getPages([
                    'parent' => $page,
                    'visibleinnavigation' => true,
                    ]),
                'class' => 'child-collections',
                'show_title' => false,
                'cols' => 3
            ]) ?>
</article>

<?= $view('inc.footer') ?>