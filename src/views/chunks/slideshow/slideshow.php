<div id="banner" class="page-header">
<div id="slideshow" class="flexslider <?php if(count($slides) == 1) : ?>single-slide<?php endif ?>">
    <ul class="slides">
        <?php foreach ($slides as $slide): ?>
            <li>
                <span class="bgimage" data-asset="<?= $slide->getAssetId() ?>" style="background-image: url(<?= $assetURL(['id' => $slide->getAssetId(), 'width' => 1200])?>)"></span>
                <span class="overlay"></span>
                <div class="flex-caption">
                    <div class="container">
                         <h3 class="slide-title slide-link"><?php if($slide->getLink() != '') :?><a href="<?= $slide->getLink() ?><?= $slide->getTitle() ?>"></a><?php else : ?><?= $slide->getTitle() ?><?php endif ?></h3>
                         <p class="slide-caption"><?= $slide->getCaption() ?></p>
                    </div>
                </div>
            </li>
        <?php endforeach ?> 
    </ul>
    <div class="flex-navigation">
        <div class="container">
            <ol class="flex-control-paging">
             <?php foreach ($slides as $key => $slide): ?>
                <li><a href="#"></a></li>

            <?php endforeach ?>
            </ol>
        </div>
    </div>
</div>
</div>