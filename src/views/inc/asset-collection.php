
<?php 

	$template = 'standard';
	if(isset($item_template) && ($item_template !== '')) :
		$template = $item_template;
	endif;

	$namespace = 'assetchunk';
	if(isset($chunk_name) && ($chunk_name !== '')) :
		$namespace = $chunk_name;
	endif;

	if(!isset($placeholder_text) || ($placeholder_text == '')) :
	$placeholder_text = 'Insert an asset';
	endif;

	if(isset($cols)) :
		$cols = 'cols-'.$cols;
	else :
	 	$cols = 'cols-1';
	endif;
?>
<?php if(isset($show_title) && $show_title === true) :?>
    <?= $chunk('text', $namespace.'title')->setHtml('<h2>{text}</h2>') ?>
<?php endif ?>
<?php if(isset($items) && ($items>1)) : ?>
	<div class="asset-collection <?php if(isset($class)) : ?><?= $class ?><?php endif ?> <?= $cols ?>">
	<?php for($i=1;$i<=$items;$i++) : ?>
    <?= $chunk('asset', $namespace.$i)->template($template)->setFilterByType('image')->setPlaceHolderText($placeholder_text) ?>
	<?php endfor ?>
	</div>
<?php else : ?>
	<div class="asset-collection cols-1">
  	  <?= $chunk('asset', $namespace)->template($template)->setFilterByType('image')->setPlaceHolderText($placeholder_text) ?>
  	  </div>
  <?php endif ?>
  

