<?= $view('inc.header') ?>

<article id="main" role="main">
    <?= $view('inc.page-header') ?>

    <section id="content" class="container">
        <?= $chunk('text', 'standfirst') ?>
        <?= $chunk('text', 'bodycopy') ?>
    </section>
    <section id="lists">
    	<ul class="cols">
    		<li class="col-2"></li>
    		<li class="col-2"></li>
    		<li class="col-2"></li>
    		<li class="col-2"></li>
    	</ul>
    	<div class="col-wrapper">
	    	<ul class="cols">
	    		<li class="col-3"></li>
	    		<li class="col-3"></li>
	    		<li class="col-3"></li>
	    		<li class="col-3"></li>
	    		<li class="col-3"></li>
	    		<li class="col-3"></li>
	    	</ul>
    	</div>
    	<ul class="cols">
    		<li class="col-4"></li>
    		<li class="col-4"></li>
    		<li class="col-4"></li>
    		<li class="col-4"></li>
    	</ul>
    	<ul class="cols">
    		<li class="col-5"></li>
    		<li class="col-5"></li>
    		<li class="col-5"></li>
    		<li class="col-5"></li>
    		<li class="col-5"></li>
    	</ul>
    	<ul class="cols">
    		<li class="col-6"></li>
    		<li class="col-6"></li>
    		<li class="col-6"></li>
    		<li class="col-6"></li>
    		<li class="col-6"></li>
    		<li class="col-6"></li>
    	</ul>
    </section>
</article>

<?= $view('inc.footer') ?>