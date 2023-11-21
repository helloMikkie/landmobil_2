<?php snippet('header') ?>

<div class="cover ">
    <?php foreach($page->images() as $file): ?>
    <div class="mySlides fade" style=" background-image: url(<?= $file->url() ?>);">
    </div>
    <?php endforeach ?>

</div>
<main class="content">
    <h1 class="page-title">Hajjkajkja khakajh</h1>
    <?php foreach (page('home')->children()->listed() as $part) : ?>
    <section>

        <?php snippet($part->intendedTemplate(), compact('part')) ?>

    </section>
    <?php endforeach ?>

</main>

<?php snippet('footer') ?>