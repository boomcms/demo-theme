<?= $view('inc.header') ?>

<article id="main" role="main">
     
    <section class="collection-list">
        <?= $view('inc.slideshow-list', [
            'class' => 'page-collection-list',
            'show_title' => false,
            'cols' => 3
        ]) ?>
    </section>

    <section id="content" class="container">

        <h1 id="b-page-title"><?= $page->getTitle() ?></h1>
        <?= $chunk('text', 'standfirst')->setHtml('<h2>{text}</h2>') ?>
        <?= $chunk('text', 'bodycopy')->setHtml('<main>{text}</main>') ?>
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