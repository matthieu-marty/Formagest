<?php
ob_start()
?>

<h3><?= $programme->getLabel() ?></h3>
<a href="<?= URL ?>programmes"><span class="iconify action-icon action-icon-primary" data-icon="fluent:backspace-24-regular" data-inline="false"></span></a>
<a href="<?= URL ?>programmes/edit/<?= $programme->getId() ?>"><span class="iconify action-icon action-icon-primary" data-icon="fluent:edit-16-regular" data-inline="false"></span></a>
<a class="text-red" href="<?= URL ?>programmes/delete/<?= $programme->getId() ?>" onclick="return confirm ('Supprimer <?= $programme->getLabel() ?> ?')"><span class="iconify action-icon action-icon-red" data-icon="fluent:delete-24-regular" data-inline="false"></span></a>

<div class="card">
    <p>Label : <?= $programme->getLabel() ?></p>
    <p>Catégorie : [CATEGORIE]</p>
    <p>Thème : [THEME]</p>
    <p>Date création : <?= $programme->getDate_Creation() ?></p>
</div>




<?php
$content = ob_get_clean();
$title = "FORMAGEST | Programme : " . $programme->getLabel();
require_once 'views/templates/default.php';
?>