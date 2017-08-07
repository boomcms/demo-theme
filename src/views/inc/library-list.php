<?php
    $template = 'list';
    if(isset($item_template) && ($item_template !== '')) :
        $template = $item_template;
    endif;

    $namespace = 'library';
    if(isset($chunk_name) && ($chunk_name !== '')) :
        $namespace = $chunk_name;
    endif;

    if(isset($cols)) :
        $cols = 'child-cols-'.$cols;
    else :
            $cols = 'child-cols-1';
    endif;

    if(!isset($carousel)) :
        $carousel = false;
    endif;

    if(isset($placeholder_text)) :
        if (!is_string($placeholder_text)) :
                $placeholder_text = 'Insert collections list';
        endif;
    else :
        $placeholder_text = 'Insert asset library';
    endif;

    $layout = 'slideshow';
    if($carousel) :
        $template = 'carousel-list';
        $layout = 'carousel';

    endif;
?>
<div class="<?= $layout ?>-list <?php if(isset($class)): ?><?= $class ?><?php endif ?> <?= $cols ?>">
    <?php if (isset($show_title) && $show_title === true) :?>
        <?= $chunk('text', $namespace.'title')->setHtml('<h2>{text}</h2>') ?>
    <?php endif ?>

    <?= $chunk('library', $namespace)->template($template)->setPlaceHolderText($placeholder_text) ?>
</div>