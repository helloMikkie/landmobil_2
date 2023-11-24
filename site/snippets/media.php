<h2><?=$part->title() ?></h2>



<?php foreach($part->media()->toStructure() as $item ): ?>

<article class="item">
    <h3><?= $item->title() ?></h3>
    <p> <span><?= $item->cast() ?></span>
        <?php if($item->persons()->isNotEmpty()): ?>:
        <?= $item->persons() ?>
        <?php endif; ?>
        <span class="date"><?= $item->date() ?></span>
    </p>
    <div class="item-heading">
        <?php if ( $item->link()->isNotEmpty()): ?>

        <div class="heading-icons">
            <a href="<?= $item->link() ?>" target="_blank">
                <?= svg('assets/images/icon-share.svg') ?></a>
        </div>
        <?php endif; ?>

    </div>

</article>

<?php endforeach ?>