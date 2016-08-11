<?= $view('inc.header') ?>

<article role="main">
    <?= $view('inc.page-header') ?>

    <section class="features container">
        <section id="content" class=" main">
        <?= $chunk('text', 'standfirst') ?>
        <?= $chunk('text', 'bodycopy') ?>
        </section>
          
          <aside class="sidebar features">
            <?= $view('inc.features',[
                'title' => 'Features',
                'items' => 6,
                'class' => 'landing-featured'
            ]) ?>
        </aside>
    </section>
</article>

<?= $view('inc.footer') ?>