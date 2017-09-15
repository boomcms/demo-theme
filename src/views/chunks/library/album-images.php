<div class="album-images">
    <ul>
        <?php foreach ($assets() as $asset): ?>
            <li>
                <a href="<?= $assetURL(['asset' => $asset]) ?>" data-sub-html=".description">
                    <span class="bgimage" data-asset="<?= $asset->getId() ?>"></span>

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
