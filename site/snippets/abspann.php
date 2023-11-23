<section>
    <article class="disclaimer">
        <?= $part->disclaimer()->kt() ?>
    </article>
    <article>
        <?php 
        $files = $part->images()->sortBy('sort');
        foreach($files as $file): ?>
        <img src=" <?= $file->url() ?>" alt="<?= $file->alt() ?>">
        <?php endforeach ?>
    </article>
</section>