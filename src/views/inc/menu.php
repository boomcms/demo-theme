<?php $homepage = $page->isRoot() ? $page : Page::findByPrimaryUri('') ?>

<ul id="topnav" class="main-menu sm sm-simple">
    <?php foreach ($getPages(['parent' => $homepage, 'visibleinnavigation' => true]) as $child): ?>
        <?php $subpages = $getPages(['parent' => $child, 'visibleinnavigation' => true]) ?>

        <li <?php if ($child->is($page)): ?> class="active"<?php endif ?>>
            <a href="<?= $child->url() ?>">
                <?= $child->getTitle() ?>
            </a>

            <?php if (count($subpages)): ?>
                <ul class="sub-menu">
                    <?php foreach ($subpages as $p): ?>
                        <li id="menu-item-<?= $p->getId() ?>" <?php if ($p->is($page)): ?> class="active"<?php endif ?>>
                            <a href="<?= $p->url() ?>" title="<?= $p->getTitle() ?>">
                                <?= $p->getTitle() ?>
                            </a>
                      </li>
                    <?php endforeach ?>
                </ul>
            <?php endif ?>
        </li>
   <?php endforeach ?>
</ul>
