 <?php      
 		$related = $getPages([
            'parent' => $page->getParent(),
            'visibleinnavigation' => true,
        ]);  
        $related = $related->forget($page->id);
        $page_id = $page->id;
        if ($related->contains($page)) {
       $related = $related->keyBy('id');
       $related->forget($page_id);
    }
    if(!isset($limit)) {
    	$limit = 3;
    }    
    if(!isset($cols)) {
    	$cols = 3;
    }
    if(!isset($id))  {
    $id='pages-related';
	}

			?>
	<?php   if (count($related)>0) : ?>
	
	<section id="<?= $id ?>" class="container">
	<div class="related">
	<ul class="cols-<?= $cols ?>">
	<?php   $index = 1;
      		foreach ($related as $p): ?>
            <li>
                <a href="<?= $p->url() ?>"<?php if ($p->is($page)): ?> class="active"<?php endif ?>>
                <img class="image" src="<?= $assetURL(['asset' => $p->getFeatureImageId(), 'width' => 400]) ?>" alt="<?= $p->getTitle() ?>">
                <h4><?= $p->getTitle() ?></h4>
                	
                </a>
            </li>

    <?php $index++;	
        	if($index>$limit) {
        		break;
        		} ?>

    <?php endforeach ?>
        </ul>
        </div>
        </section>
    <?php endif ?>