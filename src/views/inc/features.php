<?php if(isset($title)) :?>
	<h2><?= $title ?></h2>
<?php endif ?>
<?php if(!isset($items))  {
	$items = 1;
}
?>
<ul <?php if(isset($class)) :?> class="<?= $class ?>"<?php endif ?>>
    <?php for ($i = 1; $i <= $items; $i++): ?>
        <?= $chunk('feature', "features-$i")->template('standard-4col') ?>
    <?php endfor ?>
</ul>