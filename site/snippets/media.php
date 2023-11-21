<h2><?=$part->title() ?></h2>


<section>
		<?php foreach($part->media()->toStructure() as $item ): ?>

				<article> 
				<h4><?= $item->title() ?></h4>
				<?= $item->cast() ?>
				<?= $item->persons() ?> <?= $item->date() ?>
				<?php if ( $item->link()->isNotEmpty()): ?>
					<a href="<?= $item->link() ?>" target="_blank">link</a>
				<?php endif; ?>
			</article>
		<?php endforeach ?>
		</section>


