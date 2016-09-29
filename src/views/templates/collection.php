<?= $view('inc.header') ?>

<article id="main" role="main">
        <section id="content" class="container">
        <?= $view('inc.siblings-nav',[
        	'back_text' => 'More from'
        ]) ?>
        <h1 id="b-page-title"><?= $page->getTitle() ?></h1>
        <?= $chunk('text', 'standfirst') ?>
       
        <?= $chunk('text', 'bodycopy') ?>
        </section>

       <?php 
       /** 
       *    Use dfferent views if different structure. Only layout features variables should be used like 'show_title', 'cols', etc
       */ 
      ?>

            <?= $view('inc.child-pages', [
                'pages' => $getPages([
                    'parent' => $page,
                    'visibleinnavigation' => true,
                    ]),
                'class' => 'child-album-pages',
                'show_title' => false,
                'cols' => 3
            ]) ?>
</article>

<?= $view('inc.footer') ?>


