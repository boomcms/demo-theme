<?php if (count($pages)): ?>
    <ul class="page-list">
        <?php foreach ($pages as $p): ?>                    
            <li>
                <a href="<?= $p->url() ?>" class="card"> 
                    <?php if ($p->hasFeatureImage()): ?>
                        <span class="bgimage" data-asset="<?= $p->getFeatureImageId() ?>"></span>
                    <?php endif ?>

                    <div class="description">
                        <h3><?= $p->getTitle() ?></h3>

                        <?php if ($dates ?? false): ?>
                            <time datetime="<?= $p->getVisibleFrom()->format('w3c') ?>" pubdate>
                                <?= $p->getVisibleFrom()->format('j F Y') ?>
                            </time>
                        <?php endif ?>
                    </div>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
<?php endif ?>
