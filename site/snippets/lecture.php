<h2><?=$part->title() ?></h2>



<?php foreach($part->lecture()->toStructure() as $item ): ?>

<article class="item">
    <h3><?= $item->title() ?></h3>

    <p> <span><?= $item->author() ?></span>
        <?php if($item->event()->isNotEmpty()): ?>:
        <?= $item->event() ?>
        <?php endif; ?>
        <span class="date"><?= $item->date() ?></span>

    </p>
    <div class="item-heading">

        <?php if ( $item->link()->isNotEmpty()): ?>
        <div class="heading-icons">
            <a href=" <?= $item->link() ?>" target="_blank">
                <?= svg('assets/images/icon-share.svg') ?>
            </a>
        </div>
        <?php endif; ?>
    </div>


</article>
<?php endforeach ?>