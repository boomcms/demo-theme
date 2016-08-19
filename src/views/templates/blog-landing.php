<?= $view('inc.header') ?>

<article id="main" role="main">



        <section id="content" class="container">
        <h1 id="b-page-title"><?= $page->getTitle() ?></h1>
        <?= $chunk('text', 'standfirst')->setHtml('<div class="standfirst">{text}</div>') ?>
        <?= $chunk('text', 'bodycopy') ?>
        </section>

       <?php 
       /** 
       *    Use dfferent views if different structure. Only limit, cols and show_title should be used
       */ 
      ?>

            <?= $view('inc.child-pages', [
                'pages' => $getPages([
                    'parent' => $page,
                    'visibleinnavigation' => true,
                    ]),
                'class' => 'blog-child-pages',
                'show_title' => false,
                'cols' => 3
            ]) ?>
</article>

<?= $view('inc.footer') ?>