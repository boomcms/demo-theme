<?php 
    $parent = $page->getParent();
    
    $siblings = $getPages([
        'parent' => $parent,
        'visibleinnavigation' => true,
    ]);
?>

<?php if (count($siblings) > 0): ?>
    <div id="sibling-nav">
        <a href="javascript:void(0);" id="sidebar_nav_open"><span>&larr;</span> <?= $parent->getTitle()?></a>

        <div id="sidebar">
            <a href="javascript:void(0);" id="sidebar_nav_close">Close Siblings Menu</a>

            <ul>
                <li>
                    <a href="<?= $parent->url() ?>" class="parent"><?= $parent->getTitle() ?></a>
                </li>

                <?php foreach($siblings as $p) : ?>
                    <li>
                        <a href="<?= $p->url() ?>"<?php if ($p->is($page)): ?> class="active"<?php endif ?>>
                            <?= $p->getTitle() ?>
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>
<?php endif ?>