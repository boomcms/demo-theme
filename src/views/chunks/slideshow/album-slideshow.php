<div class="album-slideshow">
    <ul>
        <?php foreach ($slides as $slide): ?>
            <li class="slide-title slide-caption card">
                <span class="bgimage" data-asset="<?= $slide->getAssetId() ?>"></span>

                <div class="description">
                    <h3 class="slide-title"><?= $slide->getTitle() ?></h3>
                    <p class="slide-caption"><?= $slide->getCaption() ?></p>
                </div>
            </li> 
        <?php endforeach ?>
    </ul>
</div>
