<section class="project">


    <h2><span class="project-number"><?=$part->number() ?></span><?=$part->title() ?></h2>
    <?php if ($part->subtitle()->isNotEmpty() ): ?>
    <h3><?= $part->subtitle() ?></h3>
    <?php endif; ?>


    <p><?=$part->description() ?></p>
    <!-- Downloads -->
    <h4>Forschungsberichte</h4>
    <?php $files = $part->files()->filterBy('extension', 'pdf');
	foreach($files as $item ): ?>
    <a href="<?= $item->url() ?>" target="_blank" class="project-link">

        <?= svg('assets/images/icon-download.svg') ?>
        <div class="project-text">

            <p><?= $item->version() ?><span class="download-data">[<?= $item->extension() ?>,
                    <?= $item->niceSize() ?>]</span></p>
            <h3><?= $item->title() ?> </h3>
        </div>

    </a>
    <?php endforeach ?>


    <!-- Liste Forschung -->

    <h4>Forschungsteam</h4>
    <ul class="list">
        <?php foreach($part->team()->toStructure() as $item ): ?>
        <?php if ($item->institution()->isNotEmpty()): ?>
        <li class="list-institution"><?= $item->institution() ?></li>
        <?php endif; ?>

        <ul class="sub-list">
            <li><span><?= $item->section() ?>:</span>
                <?= $item->persons() ?></li>
        </ul>


        <?php endforeach ?>
    </ul>

    <!-- Liste Partner -->

    <h4>Projektpartner</h4>
    <ul class="list">
        <?php foreach($part->partner()->toStructure() as $item ): ?>
        <li><?= $item->name() ?> </li>
        <?php endforeach ?>
    </ul>

    <!-- Liste Förderer -->

    <h4>Fördergeber</h4>
    <?= $part->support() ?>



</section>