<div class="album-images">
    <ul>
        <?php foreach ($assets() as $asset): ?>
            <li>
                <a href="<?= $assetURL(['asset' => $asset]) ?>" data-sub-html="<h3><?= $asset->getDescription() ?>">
                    <span class="bgimage" data-asset="<?= $asset->getId() ?>"></span>

                    <?php if (!empty($asset->getCredits())): ?>
                        <span class="credits"><?= $asset->getCredits() ?></span>
                    <?php endif ?>
                </a> 
            </li>   
        <?php endforeach ?>
    </ul>
</div>
