<!DOCTYPE html>
<html>

<?php
$title = "Title";
$desc = "Description";
?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css">
    <meta property="og:type" content="website">
    <title><?= $title ?></title>
    <meta property="og:title" content="<?= $title ?>">
    <meta property="twitter:title" content="<?= $title ?>">
    <meta name="title" content="<?= $title ?>">
    <meta property="og:description" content="<?= $desc ?>">
    <meta name="description" content="<?= $desc ?>">
    <meta property="twitter:description" content="<?= $desc ?>">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:image" content="">
    <meta property="og:image" content="">

    <link href="/main.css" rel="stylesheet">
</head>

<body>
    <div class="sidebar">
        <div class="sidebar__header">
            <img src="logo.svg">
        </div>
    </div>
    <div class="content">
        <div class="content__header">
            <div class="center">Header</div>
        </div>
        <div class="content__inner">
            <div class="center">
            <?php
            print_r($data);
            ?>
            </div>
        </div>
    </div>
</body>

</html>