<?php 
	$namespace = 'blogchildpages';
	if(isset($chunk_name) && ($chunk_name !== '')) :
		$namespace = $chunk_name;
	endif;

    if(!isset($cols)) :
    	$cols = 3;
    endif;

    if(!isset($id))  :
    $id='child-pages';
	endif;  

	if(!isset($class))  :
    $class='';
	endif;
?>
<?php if(count($pages)) : ?>
	<section id="<?= $id ?>" class="child-pages-wrapper <?= $class ?>">
		<div class="child-pages">

		<?php if(isset($show_title) && $show_title === true) :?>
		    <?= $chunk('text', $namespace.'title')->setHtml('<h2>{text}</h2>') ?>
		<?php endif ?>
		<ul class="cols-<?= $cols ?>">
		<?php foreach($pages as $target) : ?>
		<li><a href="<? $target->url() ?>"> 
		    <span class="bgimage" data-asset="<?= $target->getFeatureImageId() ?>"></span>
		    <span class="overlay"></span>
		    <div class="description">
		    <h3 ><?= $target->getTitle() ?></h3>
		    <p><?= $chunk('text', 'standfirst', $target)->text() ?></p>
		    </div>
		</a>
		</li>
		<?php endforeach ?>
		</ul>
		</div>

<?php endif ?>