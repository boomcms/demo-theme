<?php 
  $menu = [
  /* 'menu-item-page-url' => [desired child pages (false -> if none)] */
        '/'  => false,
        'list-template-page'  => ['parent' => Page::findByPrimaryUri('list-template-page'), 'visibileInNavigation'],
        'standard-page'  => ['parent' => Page::findByPrimaryUri('standard-page'), 'visibileInNavigation'],
    ];
    ?>

<?php if (isset($child_items) && ($child_items)) :?>
	<ul id="topnav" class="main-menu">
	  <?php foreach ($menu as $section => $criteria) :
	  			$menu_item = Page::findByUri($section); 
	  			$menu_sub_items = false;
	  			$has_children = false; 
              	$arrows = '';

	  			if ($criteria) :
              	$menu_sub_items = $getPages($criteria);
					if (count($menu_sub_items)) : 
	                	$has_children = true;
	                	$arrows = '<i class="fa fa-angle-down"></i>';
	           		endif;
            endif ?>
		
            <li <?php if ($menu_item->is($page)): ?> class="active"<?php endif ?>>
            <a href="<?= $menu_item->url ?>"> <?= $menu_item->getTitle() ?>
            <?= $arrows ?>
            </a>
            	<?php if($has_children) : ?>
					<ul class="sub-menu">
					        <?php foreach ($menu_sub_items as $p) : ?>
					        <li id="menu-item-<?= $p->getId() ?>" <?php if ($p->is($page)): ?> class="active"<?php endif ?>>
					            <a href="<?= $p->url ?>" title="<?= $p->getTitle() ?>"> <?= $p->getTitle() ?></a>
					            </li>
					        <?php endforeach ?>
					</ul>
				<?php endif ?>
			</li>
		<?php endforeach ?>
	</ul>

<?php else : ?>
<ul id="topnav">
    <?php foreach ($getPages(['parent' => Page::findByPrimaryUri('/'), 'visibileInNavigation']) as $p): ?>
        <li><a href="<?= $p->url() ?>" <?php if ($p->is($page)): ?> class="active"<?php endif ?>><?= $p->getTitle() ?></a></li>
    <?php endforeach ?>
</ul>
<?php endif ?>