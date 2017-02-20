<?php if(isset($show_title) && $show_title === true) :?>
	<h2> <?= $chunk('text', 'featured') ?></h2>
<?php endif ?>
<?php 	
		if(!isset($items))  :
			$items = 1;
		endif;

		if(isset($cols)) :
			$cols = 'cols-'.$cols;
		else :
		 	$cols = 'cols-1';
		endif;

		if(isset($item_template)) :
			$item_template = 'standard-'.$item_template;
		else :
		 	$item_template = 'standard';
		endif;
?>
<ul <?php if(isset($class)) :?> class="featured <?= $class ?> <?= $item_template ?> <?= $cols ?>"<?php endif ?>>
    <?php for ($i = 1; $i <= $items; $i++): ?>
    	<li><?= $chunk('linkset', "features-$i")->feature()->template($item_template) ?></li><?php endfor ?>
</ul>
