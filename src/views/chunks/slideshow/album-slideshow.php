<div id="album-slideshow">
    <ul>
        <?php foreach ($slides as $slide): ?>
            <li class="slide-title slide-caption" >
                <div>
                    <span class="bgimage" data-asset="<?= $slide->getAssetId() ?>"></span>

                    <div class="description">
                        <h2 class="slide-title"><?= $slide->getTitle() ?></h2>
                        <p class="slide-caption"><?= $slide->getCaption() ?></p>
                    </div>
                </div>
            </li> 
        <?php endforeach ?>
    </ul>
</div>
