<?php if (count($pages)): ?>
    <ul class="child-pages">
        <?php foreach ($pages as $p): ?>                    
            <li>
                <a href="<?= $p->url() ?>"> 
                    <?php if ($p->hasFeatureImage()): ?>
                        <span class="bgimage" data-asset="<?= $p->getFeatureImageId() ?>"></span>
                    <?php endif ?>

                    <div class="description">
                        <h3><?= $p->getTitle() ?></h3>
                        <p><?= $chunk('text', 'standfirst', $p)->text() ?></p>

                        <?php if ((!isset($dates) || $dates === true)): ?>
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
