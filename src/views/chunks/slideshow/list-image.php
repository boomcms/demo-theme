<?php if (count($slides)): ?>
    <ul class="slides-<?= count($slides) ?>">
        <?php foreach ($slides as $slide): ?>
            <?php if ($slide->getAssetId()): ?>
                <li class="slide-title slide-caption" >
                    <a href="<?= $assetURL(['asset' => $slide->getAssetId(), 'width' => 1600]) ?>" class="album-item" >
                        <img src="<?= $assetURL(['asset' => $slide->getAssetId(), 'width' => 600]) ?>" alt="<?= $slide->getTitle() ?>" />

                        <?php if ($slide->getTitle() || $slide->getCaption()): ?>
                            <div class="description">
                                <?php if ($slide->getTitle()): ?>
                                    <h3 class="slide-title"><?= $slide->getTitle() ?></h3>
                                <?php endif ?>

                                <?php if ($slide->getCaption()): ?>
                                    <p class="slide-caption"><?= $slide->getCaption() ?></p>
                                <?php endif?>    
                            </div>
                        <?php endif ?>
                    </a>
                </li>
            <?php endif ?>    
        <?php endforeach ?>
    </ul>
<?php endif ?>
