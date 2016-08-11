<?php
$template = 'list';
if(isset($item_template) && ($item_template !== '')) {
    $template = $item_template;
} 
$namespace = 'collectionlist';
if(isset($chunk_name) && ($chunk_name !== '')) {
    $namespace = $chunk_name;
}
if(isset($cols)) {
    $cols = 'child-cols-'.$cols;
     }
     else {
        $cols = 'child-cols-1';
     }

?>
<div class="slideshow-list <?php if(isset($class)) : ?><?= $class ?><?php endif ?> <?= $cols ?>">
<?php if(isset($show_title) && $show_title === true) :?>
    <?= $chunk('text', $namespace.'title')->setHtml('<h2>{text}</h2>') ?>
<?php endif ?>

<?= $chunk('slideshow', $namespace)->template($template)->setPlaceHolderText('Insert collections list') ?>
</div>