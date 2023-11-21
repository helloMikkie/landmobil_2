<section class="container">


    <h2><?=$part->title() ?></h2>
    <?php if ($part->subtitle()->isNotEmpty() ): ?>
    <h3><?= $part->subtitle() ?></h3>
    <?php endif; ?>


    <p><?=$part->description() ?></p>

    <article>
        <?php $files = $part->files()->filterBy('extension', 'pdf');
	foreach($files as $item ): ?>
        <a href="<?= $item->url() ?>" target="_blank">
            <p><?= $item->version() ?></p>
            <h4><?= $item->title() ?> </h4><span>[<?= $item->extension() ?>, <?= $item->niceSize() ?>]</span>
        </a>
        <?php endforeach ?>
    </article>
    <article>
        <h4>Forschungsteam</h4>
        <ul>
            <?php foreach($part->team()->toStructure() as $item ): ?>
            <?php if ($item->institution()->isNotEmpty()): ?>
            <li><?= $item->institution() ?>
                <?php endif; ?>

                <ul>
                    <li><?= $item->section() ?> <?= $item->persons() ?></li>
                </ul>

            </li>
            <?php endforeach ?>
        </ul>
    </article>

    <article>
        <h4>Projektpartner</h4>
        <ul>
            <?php foreach($part->partner()->toStructure() as $item ): ?>
            <li><?= $item->name() ?> </li>
            <?php endforeach ?>
        </ul>
    </article>

    <article>
        <h4>Fördergeber</h4>
        <?= $part->support() ?>
    </article>


</section>