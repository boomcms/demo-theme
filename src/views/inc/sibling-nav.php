<?php 
    $parent = $page->getParent();
    
    $siblings = $getPages([
        'parent' => $parent
    ]);
?>

<?php if (count($siblings) > 0): ?>
    <div id="sibling-nav">
        <a href="javascript:void(0);" id="sidebar_nav_open"><span>&larr;</span> <?= $parent->getTitle()?></a>
        <nav id="sidebar">

        <a href="javascript:void(0);" id="sidebar_nav_close">Close Siblings Menu</a>

        <ul>
            <?php foreach($siblings as $p) : ?>
                <li>
                    <a href="<?= $p->url() ?>"<?php if ($p->is($page)): ?> class="active"<?php endif ?>>
                        <?= $p->getTitle() ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</nav>
<?php endif ?>