<div class="album-images">
    <ul>
        <?php foreach ($assets() as $asset): ?>
            <li>
                <a href="<?= $assetURL(['asset' => $asset]) ?>" data-sub-html="<h3><?= $asset->getDescription() ?>">
                    <span class="bgimage" data-asset="<?= $asset->getId() ?>"></span>
                </a> 
            </li>   
        <?php endforeach ?>
    </ul>
</div>
