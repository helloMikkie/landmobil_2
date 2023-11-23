<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $site->title() ?></title>

    <?= css(['assets/style.css' ]) ?>
</head>

<body>

    <header>
        <a href="#" class="content-toggle link">Info
            <?= svg('assets/images/icon-close.svg') ?>
        </a>
        <a href="mailto:<?= $page->contact() ?>" class=" link">Kontakt <?= svg('assets/images/icon-email.svg') ?></a>
    </header>