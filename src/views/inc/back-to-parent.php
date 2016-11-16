<?php $parent = $page->getParent() ?>

<?php if ($parent): ?>
    <div id="back-to-parent">
        <a href="<?= $parent->url()?>">
            <span class="fa fa-arrow-left"></span>
            <?= isset($back_text) ? $back_text : '' ?>
           <span> <?= $parent->getTitle() ?></span>
        </a>
    </div>
<?php endif ?>