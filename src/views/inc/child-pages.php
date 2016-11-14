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
		<?php foreach($pages as $p) : ?>
		<?php $published_date = $p->getVisibleFrom(); ?>
		<li><a href="<?= $p->url() ?>"> 
		    <span class="bgimage" data-asset="<?= $p->getFeatureImageId() ?>"></span>

            <div class="description">
                <h3 ><?= $p->getTitle() ?></h3>
                <p><?= $chunk('text', 'standfirst', $p)->text() ?></p>
                <?php if ((!isset($dates) || $dates === true) && $published_date): ?>
                    <span class="date"><time datetime="<?= $published_date->format('Y-m-d H:i:s') ?>" pubdate><?= $published_date->format('d M Y') ?></time></span>
                <?php endif ?>
		    </div>
		</a>
		</li>
		<?php endforeach ?>
		</ul>
		</div>

<?php endif ?>