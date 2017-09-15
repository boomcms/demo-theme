<?= $view('inc.header') ?>
<?= $view('inc.page-content') ?>

<?= $view('inc.page-list', [
    'pages' => $getPages([
        'parent'              => $page,
        'visibleinnavigation' => true,
    ]),
]) ?>

<?= $view('inc.footer') ?>
