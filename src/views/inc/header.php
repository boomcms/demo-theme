<!DOCTYPE HTML>
<html>
	<head>
		<title><?= $page->getTitle() ?> | <?= Settings::get('site.name') ?></title>
		
		<link href="/vendor/boomcms/themes/theme-default/main.css" rel='stylesheet' type='text/css' />
		
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?= $page->getDescription() ?>" />
        <meta name="keywords" content="<?= $page->getKeywords() ?>" />
        
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="<?= Settings::get('site.name') ?>">
        <meta property="og:url" content="<?= $page->url() ?>">
        <meta property="og:title" content="<?= $page->getTitle() ?>">
        <meta property="og:description" content="<?= $page->getDescription() ?>">
        
        <?php if ($page->hasFeatureImage()): ?>
            <meta property="og:image" content="<?= $assetURL(['id' => $page->getFeatureImageId(), 'width' => 200]) ?>">
        <?php endif ?>
            
        <?php if ($page->allowsExternalIndexing()): ?>
            <meta name='robots' content='index, follow' />
        <?php else: ?>
            <meta name='robots' content='noindex, nofollow' />
        <?php endif ?>
    </head>

    <body>
        <header>
            <nav id="navbar" class="container">
                    <div class="navbar-header">
                        <a id="logo" href="/"><img src="/vendor/boomcms/themes/theme-default/img/logo.png" alt="BoomCMS logo" /></a>
                    </div>

                    <div class="nav-container">
                        <?= $view('inc.menu', [
                            'child_items' => true
                        ]) ?>
                    </div>
            </nav>
        </header>
        
        <main id="wrapper">