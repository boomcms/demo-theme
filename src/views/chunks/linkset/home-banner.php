<div>
    <?php foreach ($links as $link): ?>
        <a href="<?= $link->url() ?>" class="card">
            <span class="bgimage" data-asset="<?= $link->getFeatureImageId() ?>"></span>

            <div class="description">
                <h3><?= $link->getTitle() ?></h3>
            </div>
        </a>
    <?php endforeach ?>
</div>
