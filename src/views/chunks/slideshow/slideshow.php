<div id="slideshow" class="flexslider <?php if(count($slides) == 1) : ?>single-slide<?php endif ?>">
    <ul class="slides">
        <?php foreach ($slides as $slide): ?>
            <li>
                <?php if ($slide->getLink()->url() !== ''): ?>
                    <a href="<?= $slide->getLink() ?>" class="card">
                <?php endif ?>

                <span class="bgimage" data-asset="<?= $slide->getAssetId() ?>"></span>

                <div class="flex-caption">
                    <div class="container">
                        <h2 class="slide-title slide-link"><?= $slide->getTitle() ?></h2>
                        <p class="slide-caption"><?= $slide->getCaption() ?></p>
                    </div>
                </div>

                <?php if ($slide->getLink()->url() !== ''): ?>
                    </a>
                <?php endif ?>
            </li>
        <?php endforeach ?> 
    </ul>
</div>
