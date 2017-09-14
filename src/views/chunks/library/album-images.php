<div class="album-images">
    <ul>
        <?php foreach ($assets() as $asset): ?>
            <li>
                <a href="<?= $assetURL(['asset' => $asset]) ?>" data-sub-html=".description">
                    <img src="<?= $assetURL(['asset' => $asset, 'width' => 600, 'action' => 'crop', 'height' => 400]) ?>" alt="<?= $asset->getTitle() ?>" />

                    <?php if (!empty($asset->getCredits())): ?>
                        <span class="credits"><?= $asset->getCredits() ?></span>
                    <?php endif ?> 

                    <?php if (!empty($asset->getDescription())): ?>
                        <div class="description">
                            <p class="slide-caption"><?= $asset->getDescription() ?></p>
                        </div>
                    <?php endif ?>
                </a> 
            </li>   
        <?php endforeach ?>
    </ul>
</div>
