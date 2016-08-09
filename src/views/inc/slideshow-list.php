<?php
$template = 'list';
if(isset($item_template) && ($item_template !== '')) {
    $template = $item_template;
} 
$namespace = 'collectionlist';
if(isset($chunk_name) && ($chunk_name !== '')) {
    $namespace = $chunk_name;
}

?>
<div class="slideshow-list <?php if(isset($class)) : ?><?= $class ?><?php endif ?>">
<?php if(isset($show_title) && $show_title === true) :?>
    <h2> <?= $chunk('text', 'slideshowtitle') ?></h2>
<?php endif ?>

<?= $chunk('slideshow', $namespace)->template($template)->setPlaceHolderText('Insert collections list') ?>
</div>