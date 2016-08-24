<?php 
$parent = $page->getParent(); 
if(!isset($back_text)) :
	$back_text = '';
endif;
if($parent) :
?>
<nav id="back-to-parent">
<a href="<?= $parent->url()?>"><span>&larr;</span> <?= $back_text.' <span>'.$parent->getTitle().'</span>' ?></a>
</nav>
<?php endif ?>