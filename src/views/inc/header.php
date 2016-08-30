<!DOCTYPE HTML>
<html dir="ltr" lang="en-GB"> 
	<head>
		<title><?= $page->getTitle() ?> | <?= Settings::get('site.name') ?></title>
		
		<link href="/vendor/boomcms/themes/demo/main.css" rel='stylesheet' type='text/css' />
		
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
        <?php if (isset($album)): ?>
        <link href="/vendor/boomcms/themes/demo/album.css" rel='stylesheet' type='text/css' />
        <?php endif ?>


        
    </head>

    <body>
        <header>
            <nav id="navbar" class="container">
                    <div class="navbar-header">
                    <?php if(isset($logo) && $logo == true) :?>
                        <a id="logo" href="/">
                        <?= $chunk('asset', 'logo')->template('logo') ?>
                        </a>

                    <?php else : ?>
                        <?php $home_page = Page::findByUri('/'); 
                        ?>
                        <a id="logo" href="/"><?= $chunk('asset', 'logo', $home_page)->template('logo') ?></a>
                    <?php endif ?>
                    </div>
                        
                    <div class="nav-container">
                     <input id="main-menu-state" type="checkbox" />
                    <label class="main-menu-btn" for="main-menu-state">
                    <span class="main-menu-btn-icon"></span> <span class="main-menu-btn-text">Toggle main menu visibility</span> <span class="main-menu-btn-title" aria-hidden="true"><span aria-hidden="true" data-icon="h"></span></span>
                   </label>
                        <?= $view('inc.menu', [
                            'child_items' => true
                        ]) ?>
                    </div>
            </nav>
        </header>
        
        <main id="wrapper">