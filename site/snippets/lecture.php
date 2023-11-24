<section>
    <h2><?=$part->title() ?></h2>



    <?php foreach($part->lecture()->toStructure() as $item ): ?>

    <article class="item">
        <div class="item-heading">
            <?php if ( $item->link()->isNotEmpty()): ?>
            <a href=" <?= $item->link() ?>" target="_blank">
                <?= svg('assets/images/icon-share.svg') ?>
            </a>
            <?php endif; ?>
            <h3><?= $item->title() ?></h3>
        </div>
        <p> <span><?= $item->author() ?></span>
            <?= $item->event() ?> <span class="date"><?= $item->date() ?></span>

        </p>

    </article>
    <?php endforeach ?>

</section>