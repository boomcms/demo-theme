<?php
    $pages = $getPages([
        'parent'              => $page->getParent(),
        'limit'               => 3,
        'not'                 => $page,
        'visibleinnavigation' => true,
    ])
?>

<?php if (count($pages) > 0): ?>
	<section id="related-pages" class="container">
        <ul class="cols-3">
            <?php foreach ($pages as $p): ?>
                <li>
                    <a href="<?= $p->url() ?>">
                    <?php if ($p->hasFeatureImage()): ?>
                            <img class="image" src="<?= $assetURL(['asset' => $p->getFeatureImageId(), 'width' => 400]) ?>" alt="<?= $p->getTitle() ?>">
                        <?php endif ?>

                        <h4><?= $p->getTitle() ?></h4>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </section>
<?php endif ?>