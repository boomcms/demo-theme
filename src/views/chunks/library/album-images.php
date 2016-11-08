<div class="slideshow-list album-images child-cols-3">
    <?php
        $assets = $assets();
        if (count($assets)):
    ?>
        <ul>
            <?php foreach ($assets as $asset): ?>
                <?php
                    $caption = $asset->getDescription();
                    $credits = $asset->getCredits();
                ?>

                <li>
                    <a href="<?= $assetURL(['asset' => $asset, 'width' => 1600]) ?>" class="album-item" <?php if ($caption): ?>data-sub-html=".description"<?php endif ?>>
                        <img src="<?= $assetURL(['asset' => $asset, 'width' => 600, 'action' => 'crop', 'height' => 400]) ?>" alt="<?= $asset->getTitle() ?>" />

                        <?php if($credits) : ?>
                            <span class="credits"><?= $credits ?></span>
                        <?php endif ?> 

                        <?php if($caption): ?>
                            <div class="description">
                                <p class="slide-caption"><?= $caption ?></p>
                            </div>
                        <?php endif ?>
                    </a> 
                </li>   
            <?php endforeach ?>
        </ul>
    <?php endif ?>
</div>