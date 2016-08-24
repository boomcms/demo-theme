<a href="<? $target->url() ?>"> 
    <span class="bgimage" data-asset="<?= $target->getFeatureImageId() ?>"></span>
    <span class="overlay"></span>
    <span class="description">
    <h3><?= $target->getTitle() ?></h3>
    <p><?= $chunk('text', 'standfirst', $target)->text() ?></p>
    </span>
</a>