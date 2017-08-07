<!DOCTYPE HTML>
<html dir="ltr" lang="en-GB"> 
    <head>
        <title><?= $page->getTitle() ?> | <?= Settings::get('site.name') ?></title>

        <link href="<?= $pub('main.css') ?>" rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <?php if (isset($album)): ?>
            <link href="/vendor/boomcms/themes/demo/album.css" rel='stylesheet' type='text/css' />
        <?php endif ?>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?= meta_description() ?>
        <?= meta_keywords() ?>
        <?= meta_og() ?>
        <?= meta_robots() ?>
        <?= $analytics() ?>
    </head>

    <body <?php if (Editor::isEnabled()): ?> class="edit-mode"<?php endif ?>>
        <header>
            <nav id="navbar" class="container">
                <div class="navbar-header">
                    <?php if (isset($logo) && $logo == true) :?>
                        <a id="logo" href="/">
                            <?= $chunk('asset', 'logo')->template('logo') ?>
                        </a>
                    <?php else: ?>
                        <?php $home_page = Page::findByUri('') ?>
                        <a id="logo" href="/"><?= $chunk('asset', 'logo', $home_page)->template('logo') ?></a>
                    <?php endif ?>
                </div>

                <div class="nav-container">
                    <input id="main-menu-state" type="checkbox" />

                    <label class="main-menu-btn" for="main-menu-state">
                        <span class="main-menu-btn-icon"></span> <span class="main-menu-btn-text">Toggle main menu visibility</span> <span class="main-menu-btn-title" aria-hidden="true"><span aria-hidden="true" data-icon="h"></span></span>
                    </label>

                    <?= $view('inc.menu', ['child_items' => true]) ?>
                </div>
            </nav>
        </header>

        <main id="wrapper">