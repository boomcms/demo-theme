<div id="banner">
    <?php if ($asset()->isVideo()): ?>
        <video
            src="<?= $assetURL(['asset' => $asset()]) ?>"
            poster="<?= $assetURL(['asset' => $asset(), 'action' => 'thumb']) ?>)"
            controls autoplay>
        </video>
    <?php elseif ($asset()->isImage()): ?>
        <img src="<?= $assetURL(['asset' => $asset()]) ?>" alt="<?= $asset()->getTitle() ?>">
    <?php endif ?>
</div>
