  <?php if (count($slides)) : ?>
    <ul class="slides">
            <?php foreach ($slides as $slide): ?>
			     <?php if ($slide->getAssetId()) : 
            
                    $title = $slide->getTitle();
                    $caption = $slide->getCaption();
                    $link = $slide->getLink();
                ?>
                <li>
                    <a href="<?php if($link) :?><?= $link ?><?php else : ?>javascript:void()<?php endif ?>" class="slide-link">
                    <span class="bgimage" data-asset="<?= $slide->getAssetId() ?>" data-width="400" data-height="300">
                    </span>

                    <?php if($title || $caption) : ?> 
                    <div class="description">
                        <?php if($title) : ?>
                             <h3 class="slide-title"><?= $title ?></h3>
                        <?php endif ?>
                        <?php if($caption) : ?>
                             <p class="slide-caption"><?= $caption ?></p>
                        <?php endif?>    
                    </div>
                    <?php endif ?>
                    </a></li>
                <?php endif ?>    
            <?php endforeach ?>
            </ul>
<?php endif ?>