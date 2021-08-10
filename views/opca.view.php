<?php
ob_start()
?>

<h3><?= $opca->getNom() ?></h3>
<a href="<?= URL ?>opcas"><span class="iconify action-icon action-icon-primary" data-icon="fluent:backspace-24-regular" data-inline="false"></span></a>
<a href="<?= URL ?>opcas/edit/<?= $opca->getId() ?>"><span class="iconify action-icon action-icon-primary" data-icon="fluent:edit-16-regular" data-inline="false"></span></a>
<a class="text-red" href="<?= URL ?>opcas/delete/<?= $opca->getId() ?>" onclick="return confirm ('Supprimer <?= $opca->getNom() ?> ?')"><span class="iconify action-icon action-icon-red" data-icon="fluent:delete-24-regular" data-inline="false"></span></a>

<div class="card">
    <p>Nom : <?= $opca->getNom() ?></p>
    <p>Adresse : <?= $opca->getAdresse() ?></p>
    <p>Code Postal : <?= $opca->getCode_Postal() ?></p>
    <p>Ville :<?= $opca->getVille() ?></p>
    <p>Date création : <?= $opca->getDate_Creation() ?></p>
    <p>Date modification : <?= $opca->getDate_Modification() ?></p>
</div>









<?php
$content = ob_get_clean();
$title = "FORMAGEST | OPCA : " . $opca->getNom();
require_once 'views/templates/default.php';
?>