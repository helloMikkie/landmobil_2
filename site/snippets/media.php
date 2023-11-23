<h2><?=$part->title() ?></h2>


<section class="container">
    <?php foreach($part->media()->toStructure() as $item ): ?>

    <article class="item">
        <h3><?= $item->title() ?></h3>
        <p> <span><?= $item->cast() ?>:</span>
            <?= $item->persons() ?> <span class="date"><?= $item->date() ?></span></p>

        <?php if ( $item->link()->isNotEmpty()): ?>
        <div class="share-links">
            <a href="<?= $item->link() ?>" target="_blank">
                <?= svg('assets/images/icon-share.svg') ?></a>
            <?php endif; ?>
        </div>
    </article>

    <?php endforeach ?>
</section>