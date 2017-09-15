<?= $view('inc.header') ?>
<?= $chunk('asset', 'banner')->template('banner') ?>
<?= $view('inc.page-content', ['time' => true]) ?>

<?= $view('inc.page-list', [
    'pages' => $getPages([
        'parent'              => $page->getParent(),
        'visibleinnavigation' => true,
        'limit'               => 8,
    ]),
    'dates' => true,
]) ?>

<?= $view('inc.footer') ?>
