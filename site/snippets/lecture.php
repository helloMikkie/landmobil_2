<section>
    <h2><?=$part->title() ?></h2>



    <?php foreach($part->lecture()->toStructure() as $item ): ?>

    <article class="item">
        <h3><?= $item->title() ?></h3>
        <p> <span><?= $item->author() ?></span>
            <?= $item->event() ?> <span class="date"><?= $item->date() ?></span>

        </p>

        <?php if ( $item->link()->isNotEmpty()): ?>
        <div class="share-links">
            <a href=" <?= $item->link() ?>" target="_blank">
                <?= svg('assets/images/icon-share.svg') ?>
            </a>
            <?php endif; ?>
        </div>
    </article>
    <?php endforeach ?>

</section>