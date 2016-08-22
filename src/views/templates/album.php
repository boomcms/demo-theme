<?= $view('inc.header', ['album' => true]) ?>
<article id="main" role="main">
	<section id="content" class="container">
		<h1 id="b-page-title"><?= $page->getTitle() ?></h1>
		<?= $chunk('text', 'standfirst')->setHtml('<div class="standfirst">{text}</div>') ?>
        <?= $chunk('text', 'bodycopy')->setHtml('<div class="text">{text}</div>') ?>
	</section>

	<section class="album-list">
	    <?= $view('inc.slideshow-list', [
	        'class' => 'album-images',
	        'show_title' => false,
	        'cols' => 3,
	        'item_template' => 'list-image',
	        'placeholder_text' => 'Insert album assets'
	    ]) ?>
	</section>

</article>
<?= $view('inc.footer', ['album' => true]) ?>