<?php 
  $menu = [
  /* 'menu-item-page-url' => [desired child pages (false -> if none)] */
        '/'  => false,
        'blog'  => ['parent' => Page::findByPrimaryUri('blog'), 'visibileInNavigation'],
        'about'  => ['parent' => Page::findByPrimaryUri('about'), 'visibileInNavigation'],
    ];
    ?>

<?php if (isset($child_items) && ($child_items)) :?>
	<ul id="topnav" class="main-menu">
	  <?php foreach ($menu as $section => $criteria) : ?>

	  	<?php   $menu_item = Page::findByUri($section); ?>
	  			
	  	<?php	if($criteria) :?>
	  	<?php 		$menu_sub_items = empty($criteria) ? $getPages(['parent' => $menu_item]) : $getPages($criteria);
                	
                else: ?>
                <?php 
                	$menu_sub_items = [];
                	endif ?>

                <?php $has_children = count($menu_sub_items); ?>
		
            <li <?php if ($menu_item->is($page)): ?> class="active"<?php endif ?>>
            <a href="<?= $menu_item->url() ?>"> <?= $menu_item->getTitle() ?>
           <?php if ($has_children): ?>
                        <i class="fa fa-angle-down"></i>
			<?php endif ?>
            </a>
            	<?php if($has_children) : ?>
					<ul class="sub-menu">
					        <?php foreach ($menu_sub_items as $p) : ?>
					        <li id="menu-item-<?= $p->getId() ?>" <?php if ($p->is($page)): ?> class="active"<?php endif ?>>
					            <a href="<?= $p->url() ?>" title="<?= $p->getTitle() ?>"> <?= $p->getTitle() ?></a>
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