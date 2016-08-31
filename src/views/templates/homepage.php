<?= $view('inc.header', [
'logo' => true
]) ?>

<article id="main" role="main">
    <?= $view('inc.slideshow') ?> 

    <section id="content" class="container">

        <h1 id="b-page-title"><?= $page->getTitle() ?></h1>
        <?= $chunk('text', 'standfirst')->setHtml('<h2>{text}</h2>') ?>
        <?= $chunk('text', 'bodycopy')->setHtml('<main>{text}</main>') ?>
    </section>
    <section id="featured">
        <?= $view('inc.featured',[
            'show_title' => false,
            'items' => 6,
            'item_template' => 'with-image',
            'class' => 'homepage-featured',
            'cols'  => 3
        ]) ?>
    </section>
    <section class="featured-collection container">
        <?= $view('inc.asset-collection',[
             'items' => 1,
             'cols' => 1,
             'class' => 'showcase-collection',
             'chunk_name' => 'collection',
             'item_template' => '',
             'placeholder_text' => 'Insert a Collection'
        ]) ?>

    </section>
    <section class="collection-list container">
        <?= $view('inc.slideshow-list', [
            'class' => 'home-collection-list',
            'show_title' => true,
            'cols' => 3
        ]) ?>
    </section>

    <section class="featured-collection container">
        
        <?= $view('inc.asset-collection',[
             'items' => 1,
             'cols' => 1,
             'class' => 'showcase-collection2',
             'chunk_name' => 'collection_2', //must not colide with other instances
             'item_template' => '',
             'placeholder_text' => 'Insert a Collection'
        ]) ?>

    </section>
    <section id="bodytext" class="container">
        <?= $chunk('text', 'standfirst2')->setPlaceholderText('Insert title')->setHtml('<h3>{text}</h3>') ?>
        <?= $chunk('text', 'bodycopy2') ?>
    </section>
    
    <section id="lists">
    <h2>Remove Me</h2>
    	<ul class="cols-2"> 
    		<li></li>
    		<li></li>
    		<li></li>
    		<li></li>
    	</ul>
    	<div class="cols-wrapper">
	    	<ul class="cols-3">
	    		<li></li>
	    		<li></li>
	    		<li></li>
	    		<li></li>
	    		<li></li>
	    		<li></li>
	    	</ul>
    	</div>
    	<ul class="cols-4">
    		<li></li>
    		<li></li>
    		<li></li>
    		<li></li>
    	</ul>
    	<ul class="cols-5">
    		<li></li>
    		<li></li>
    		<li></li>
    		<li></li>
    		<li></li>
    	</ul>
    	<ul class="cols-6">
    		<li></li>
    		<li></li>
    		<li></li>
    		<li></li>
    		<li></li>
    		<li></li>
    	</ul>
    </section>
</article>

<?= $view('inc.footer-homepage') ?>