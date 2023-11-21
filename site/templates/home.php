<?php snippet('header') ?>


<?php foreach (page('home')->children()->listed() as $part) : ?>
    <section class="<?= $part->intendedTemplate() ?>">
      <?php snippet($part->intendedTemplate(), compact('part')) ?>
    </section>
  <?php endforeach ?>


<?php snippet('footer') ?>