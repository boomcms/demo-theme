<?php if(isset($title)) :?>
	<h2><?= $title ?></h2>
<?php endif ?>
<?php if(!isset($items))  {
	$items = 1;
}

if(isset($item_template)) {
	$item_template = 'standard-'.$item_template;
	 }
	 else {
	 	$item_template = 'standard';
	 }
?>
<ul <?php if(isset($class)) :?> class="<?= $class ?>"<?php endif ?>>
    <?php for ($i = 1; $i <= $items; $i++): ?>
        <?= $chunk('feature', "features-$i")->template($item_template) ?>
    <?php endfor ?>
      
</ul>
