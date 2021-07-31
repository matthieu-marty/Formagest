<?php
ob_start()
?>

<h3><?= $module->getLabel() ?></h3>
<p class="text-border"><a href="<?= URL ?>modules">Retour</a> | <a class="text-red" href="<?= URL ?>modules/delete/<?= $module->getId() ?>">Supprimer</a></p>
<div class="card">
    <h5>Label</h5>
    <p> <?= $module->getLabel() ?></p>

    <h5>Objectif pédagogique</h5>
    <p><?= $module->getObjectif_Pedagogique() ?></p>

    <h5>Description</h5>
    <textarea disabled rows="20" class="textarea-disabled"><?= $module->getDescription() ?></textarea>
</div>









<?php
$content = ob_get_clean();
$title = "FORMAGEST | Module : " . $module->getLabel();
require_once 'views/templates/default.php';
?>