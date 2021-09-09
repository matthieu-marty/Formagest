<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link rel="icon" href="<?= URL ?>public/icon/icon.png" type="image/png">
    <link rel="stylesheet" href="<?= URL ?>public/style/print.css">
    <title><?= $title ?></title>
</head>

<body id="top">
   
    <?= $content ?>
    <button class="btn-fixed go-back" onclick=""><span class="iconify" data-icon="fluent:arrow-hook-up-left-20-regular"></span></button>
    <a href="#top" class="btn-fixed scroll-to-top" onclick=""><span class="iconify" data-icon="fluent:arrow-sort-up-20-regular"></span></a>
    <button class="btn-fixed to-print" onclick="window.print();"><span class="iconify" data-icon="fluent:print-20-regular"></span></button>
</body>

</html>