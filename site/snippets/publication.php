<h2><?=$part->title() ?></h2>


<section class="container">
    <?php foreach($part->publication()->toStructure() as $item ): ?>

    <article>
        <h4><?= $item->title() ?></h4>
        <?= $item->author() ?>
        <?= $item->publisher() ?> <?= $item->date() ?>
        <?php if ( $item->link()->isNotEmpty()): ?>
        <a href="<?= $item->link() ?>" target="_blank">link</a>
        <?php endif; ?>
        <?php if ( $item->download()->isNotEmpty()): ?>
        <a href="<?= $item->download()->toFiles() ?>" target="_blank">download</a>
        <?php endif; ?>
    </article>
    <?php endforeach ?>
</section>