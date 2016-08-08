<a href="<? $target->url() ?>"> 
    <span class="image" data-asset="<?= $target->getFeatureImageId() ?>"></span>
    <h3><?= $target->getTitle() ?></h3>
    <p><?= $chunk('text', 'standfirst', $target)->text() ?></p>
</a>