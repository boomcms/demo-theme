<?= $view('inc.header') ?>

<div id="home-banner">
    <?= $chunk('slideshow', 'slideshow')->template('slideshow') ?>
    <?= $chunk('linkset', 'banner')->setOptions(['link-title' => true])->template('home-banner') ?>
</div>

<?= $view('inc.page-content') ?>
<?= $chunk('slideshow', 'collectionlist')->template('album-slideshow') ?>

<div class="container">
    <?= $chunk('text', 'bodycopy2')->setHtml('<div class="content">{text}</div>') ?>
</div>

<?= $chunk('linkset', 'page-list1')->template('page-list') ?>

<div class="container">
    <?= $chunk('text', 'bodycopy3')->setHtml('<div class="content">{text}</div>') ?>
</div>

<?= $chunk('slideshow', 'collectionlist2')->template('album-slideshow') ?>

<div class="container">
    <?= $chunk('text', 'bodycopy4')->setHtml('<div class="content">{text}</div>') ?>
</div>

<?= $chunk('linkset', 'page-list2')->template('page-list') ?>
<?= $view('inc.footer') ?>
