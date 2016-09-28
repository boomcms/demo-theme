<div class="slideshow-list album-images child-cols-3">
<?php
$slides = $assets();
if (count($slides)) : ?>
<ul>
<?php foreach ($slides as $slide): ?>
<?php if ($slide) : ?>
<?php
$title = $slide->getTitle();
$caption = $slide->getDescription();
$credits = $slide->getCredits();
// $title = $caption = '';
// dd(get_class_methods($slide));
?>
<li>
   <a href="<?= $assetURL(['asset' => $slide->getId(), 'width' => 1600]) ?>" class="album-item" <?php if($title || $caption) : ?>data-sub-html=".description"<?php endif ?>><img src="<?= $assetURL(['asset' => $slide->getId(), 'width' => 600]) ?>" alt="<?= $title ?>" />

    <?php if($credits) : ?>
       <span class="credits"><?= $credits ?></span>
       <?php endif; ?> 
    <?php if($title || $caption) : ?><div class="description">
    <?php if($title) : ?>
         <h3 class="slide-title"><?= $title ?></h3>
    <?php endif ?>
    <?php if($caption) : ?>
         <p class="slide-caption"><?= $caption ?></p>
         
    <?php endif?>    
       </div>
    <?php endif ?>
    </a> 
</li><?php endif ?>    
<?php endforeach ?>
</ul>
<?php  endif ?>
</div>