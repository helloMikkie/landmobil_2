<section class="container">
    <h2><?=$part->title() ?></h2>


    <article>
        <?php foreach($part->lecture()->toStructure() as $item ): ?>

        <article>
            <h4><?= $item->title() ?></h4>
            <?= $item->author() ?>
            <?= $item->event() ?> <?= $item->date() ?>
            <?php if ( $item->link()->isNotEmpty()): ?>
            <a href="<?= $item->link() ?>" target="_blank">link</a>
            <?php endif; ?>
        </article>
        <?php endforeach ?>
    </article>
</section>