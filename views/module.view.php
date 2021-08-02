<?php
ob_start()
?>

<h3><?= $module->getLabel() ?></h3>
<p class="text-border"><a href="<?= URL ?>modules">Retour</a> | <a href="<?= URL ?>modules/edit/<?= $module->getId() ?>">Modifier</a> | <a class="text-red" href="<?= URL ?>modules/delete/<?= $module->getId() ?>" onclick="return confirm ('Supprimer <?= $module->getLabel() ?> ?')">Supprimer</a></p>

<h5>Label</h5>
<div class="card mb-2">
    <div class="flex-row">
        <span class="iconify icon-h4" data-icon="fluent:learning-app-24-regular" data-inline="false"></span>
        <h4 class="mb-0"> <?= $module->getLabel() ?></h4>
    </div>
</div>

<h5>Objectif pédagogique</h5>
<div class="card mb-2">
    <h5 class="mb-0"> <?= $module->getObjectif_Pedagogique() ?></h5>
</div>


<h5>Description</h5>
<div class="card mb-2">
    <textarea disabled rows="20" class="textarea-disabled"><?= $module->getDescription() ?></textarea>
</div>











<?php
$content = ob_get_clean();
$title = "FORMAGEST | Module : " . $module->getLabel();
require_once 'views/templates/default.php';
?>