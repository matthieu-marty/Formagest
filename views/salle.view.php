<?php
ob_start()
?>

<h3><?= $salle->getLabel() ?></h3>
<a href="<?= URL ?>salles"><span class="iconify action-icon action-icon-primary" data-icon="fluent:backspace-24-regular" data-inline="false"></span></a>
<a href="<?= URL ?>salles/edit/<?= $salle->getId() ?>"><span class="iconify action-icon action-icon-primary" data-icon="fluent:edit-16-regular" data-inline="false"></span></a>
<a class="text-red" href="<?= URL ?>salles/delete/<?= $salle->getId() ?>" onclick="return confirm ('Supprimer <?= $salle->getLabel() ?> ?')"><span class="iconify action-icon action-icon-red" data-icon="fluent:delete-24-regular" data-inline="false"></span></a>

<div class="card">
    <p>Label : <?= $salle->getLabel() ?></p>
    <p>Adresse : <?= $salle->getAdresse() ?></p>
    <p>Code Postal : <?= $salle->getCode_Postal() ?></p>
    <p>Ville :<?= $salle->getVille() ?></p>
    <p>Date création : <?= $salle->getDate_Creation() ?></p>
    <p>Date modification : <?= $salle->getDate_Modification() ?></p>
</div>









<?php
$content = ob_get_clean();
$title = "FORMAGEST | Salle : " . $salle->getLabel();
require_once 'views/templates/default.php';
?>