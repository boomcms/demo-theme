<?php 
$parent = $page->getParent();
$siblings = $getPages([
	'parent' => $parent
	]); 

if(!isset($back_text)) :
	$back_text = '';
endif;

if(count($siblings)>0) :
?>
 <a href="javascript:void(0);" id="sidebar_nav_open"><span>&larr;</span> <?= $back_text.' '.$parent->getTitle()?></a>
<nav id="sidebar">
<a href="javascript:void(0);" id="sidebar_nav_close">Close Siblings Menu</a>
	<ul>
	<?php foreach($siblings as $p) : ?>
	<li><a href="<?= $p->url() ?>" <?php if($p->is($page)): ?> class="active"<?php endif ?>><?= $p->getTitle() ?></a></li>
	<?php endforeach ?>
	</ul>
</nav>
<?php endif ?>