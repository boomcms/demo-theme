<?php 
  $menu = [
  /* 'menu-item-page-url' => [desired child pages (empty -> if none)] */
        '/'  => false,
        'blog'  => ['parent' => Page::findByPrimaryUri('blog'), 'visibileInNavigation'],
        'portfolio'  => [],
        'about'  => [],
    ];
    ?>

<?php if (isset($child_items) && ($child_items)) :?>
	<ul id="topnav" class="main-menu sm sm-simple">
	  <?php foreach ($menu as $section => $criteria) : ?>
	  	<?php   
        $menu_item = Page::findByUri($section); 
        $menu_sub_items = empty($criteria) ? $getPages(['parent' => $menu_item, 'visibileInNavigation']) : $getPages($criteria); ?>
                    
	  	<?php	if(!empty($menu_sub_items)) : ?>

                <?php $has_children = ($criteria === false) ? false : count($menu_sub_items); ?>
		
            <li <?php if ($menu_item->is($page)): ?> class="active"<?php endif ?>>
            <a href="<?= $menu_item->url() ?>"><?= $menu_item->getTitle() ?><?php if ($has_children): ?><?php /* Add any toggler needed */ ?><?php endif ?>
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
            <?php endif ?>
		<?php endforeach ?>
	</ul>


<?php else : ?>
<ul id="topnav">
    <?php foreach ($getPages(['parent' => Page::findByPrimaryUri('/'), 'visibileInNavigation']) as $p): ?>
        <li><a href="<?= $p->url() ?>" <?php if ($p->is($page)): ?> class="active"<?php endif ?>><?= $p->getTitle() ?></a></li>
    <?php endforeach ?>
</ul>
<?php endif ?>
