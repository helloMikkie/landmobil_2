<section class="container">
	<div class="heading">
<h2><?=$part->title() ?></h2>
<?php if ($part->subtitle()->isNotEmpty() ): ?>
<h3><?= $part->subtitle() ?></h3>
<?php endif; ?>
</div>

<p><?=$part->description() ?></p>

<article>
<?php $files = $part->files()->filterBy('extension', 'pdf');
	foreach($files as $item ): ?>
		<a href="<?= $item->url() ?>" target="_blank"><span><?= $item->version() ?></span><?= $item->title() ?> <span>[<?= $item->extension() ?>, <?= $item->niceSize() ?>]</span></a>
	<?php endforeach ?>
	</article>
<div>
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
	</div>

	<div>
<h4>Projektpartner</h4>
	<ul>
			<?php foreach($part->partner()->toStructure() as $item ): ?>
			<li><?= $item->name() ?> </li>
			<?php endforeach ?>
		</ul>
	</div>

	<div>
	<h4>Fördergeber</h4>
		<?= $part->support() ?>
	</div>
	</section>