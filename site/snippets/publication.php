<h2><?=$part->title() ?></h2>



<?php foreach($part->publication()->toStructure() as $item ): ?>

<article class="item">
    <h3><?= $item->title() ?></h3>


    <p><span><?= $item->author() ?></span>
        <?php if($item->publisher()->isNotEmpty()): ?>:
        <?= $item->publisher() ?>
        <?php endif; ?>
        <span class="date"><?= $item->date() ?></span>
    </p>


    <div class="item-heading">

        <?php if ( $item->link()->isNotEmpty()): ?>
        <div class="heading-icons">
            <a href=" <?= $item->link() ?>" target="_blank">
                <?= svg('assets/images/icon-share.svg') ?>
            </a>
            <?php endif; ?>
            <?php if ( $item->download()->isNotEmpty()): ?>
            <a href="<?= $item->download()->toFiles() ?>" target="_blank">
                <?= svg('assets/images/icon-download.svg') ?>
            </a>

        </div>
        <?php endif; ?>
    </div>

</article>
<?php endforeach ?>