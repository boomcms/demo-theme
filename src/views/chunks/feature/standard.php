<a href="<? $target->url() ?>">
    <h3><?= $target->getTitle() ?></h3>
    <p><?= $chunk('text', 'standfirst', $target)->text() ?></p>
</a>