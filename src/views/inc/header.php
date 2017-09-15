<!DOCTYPE HTML>
<html dir="ltr" lang="en-GB"> 
    <head>
        <title><?= $page->getTitle() ?> | <?= Settings::get('site.name') ?></title>

        <link href="<?= $pub('main.css') ?>" rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,900" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?= meta_description() ?>
        <?= meta_keywords() ?>
        <?= meta_og() ?>
        <?= meta_robots() ?>
        <?= $analytics() ?>
    </head>

    <body id="<?= $page->getTemplate()->getFilename() ?>">
        <header>
            <nav id="navbar" class="container"> 
                <?php if (!$page->isRoot()): ?>
                    <?= $view('inc.sibling-nav') ?>
                <?php endif ?>

                <div class="navbar-header">
                    <?php $home = $page->isRoot() ? $page : Page::findByUri('') ?>

                    <a id="logo" href="/"><?= $chunk('asset', 'logo', $home)->template('logo') ?></a>
                </div>

                <div class="nav-container">
                    <input id="main-menu-state" type="checkbox" />

                    <label class="main-menu-btn" for="main-menu-state">
                        <span class="main-menu-btn-icon"></span>
                        <span class="main-menu-btn-text">Toggle main menu visibility</span>

                        <span class="main-menu-btn-title" aria-hidden="true">
                            <span aria-hidden="true" data-icon="h"></span>
                        </span>
                    </label>

                    <ul id="topnav" class="main-menu">
                        <?php foreach ($getPages(['parent' => $home, 'visibleinnavigation' => true]) as $child): ?>
                            <li<?php if ($child->is($page)): ?> class="active"<?php endif ?>>
                                <a href="<?= $child->url() ?>">
                                    <?= $child->getTitle() ?>
                                </a>
                            </li>
                       <?php endforeach ?>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
