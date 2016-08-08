<?= $view('inc.header') ?>

<article id="main" role="main">
    <?= $view('inc.slideshow') ?> 

    <section id="content" class="container">

        <h1 id="b-page-title"><?= $page->getTitle() ?></h1>
        <?= $chunk('text', 'standfirst') ?>
        <?= $chunk('text', 'bodycopy') ?>
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

<?= $view('inc.footer') ?>