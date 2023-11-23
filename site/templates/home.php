<?php snippet('header') ?>

<!-- Cover -->

<section class="cover ">
    <?php 
     $covers = $page->images()->sortBy('sort');
    foreach($covers as $file): ?>
    <div class="mySlides fade" style=" background-image: url(<?= $file->url() ?>);">
    </div>
    <?php endforeach ?>
    <h1 class="page-title"><?= $page->title() ?></h1 </div>
</section>

<!-- Content -->

<main class="content">

    <?php foreach (page('home')->children()->listed() as $part) : ?>
    <section>

        <?php snippet($part->intendedTemplate(), compact('part')) ?>

    </section>
    <?php endforeach ?>
    <?php snippet('foot') ?>
</main>

<?php snippet('footer') ?>