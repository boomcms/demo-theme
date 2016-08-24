<?php if (count($slides)) : ?>
<ul>
<?php foreach ($slides as $slide): ?>
<?php if ($slide->getAssetId()) : ?>
<?php
$title = $slide->getTitle();
$caption = $slide->getCaption();
?>
<li class="slide-title slide-caption" >
    <a href="<?= $assetURL(['asset' => $slide->getAssetId(), 'width' => 1600]) ?>" class="album-item" ><img src="<?= $assetURL(['asset' => $slide->getAssetId(), 'width' => 600]) ?>" alt="<?= $title ?>" />
    <span class="overlay"></span>
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
<?php endif ?>