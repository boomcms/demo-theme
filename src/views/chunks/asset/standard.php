<div class="asset-container asset-caption asset-title asset-link">
<span class="bgimage" data-asset="<?= $assetId ?>" data-width="1600"></span>

<?php if($title || $caption) :?>
    <span class="description">
   <?php if($link) :?> <a href="<?= $link ?>"><?php endif?>
    <?php if($title) :?><h3>
    	
    	<?= $title ?>
    	</h3>
    <?php endif ?>
    <?php if($caption) :?><p><?= $caption ?></p><?php endif ?>
    <?php if($link) :?></a><?php endif ?>
    </span> 
    <?php endif ?>
</div>