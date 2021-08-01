<?php
ob_start()
?>

<h3>Mettre à jour : <?= $module->getlabel() ?></h3>

<form action="<?= URL ?>modules/update/<?= $module->getId() ?>" method="post" enctype="multipart/form-data" autocomplete="off">
    <div class="grid gap-1">
        <div class="col-12">
            <label for="label">Label</label>
            <input class="form" type="text" name="label" id="label" value="<?= $module->getLabel() ?>">
        </div>
        <div class="col-12">
            <label for="objectif_pedagogique">Objectif pédagogique</label>
            <input class="form" type="text" name="objectif_pedagogique" id="objectif_pedagogique" value="<?= $module->getObjectif_Pedagogique() ?>">
        </div>
        <div class="col-12">
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="20" class="form"><?= $module->getDescription() ?></textarea>
        </div>
    </div>
    <div class="text-right">
        <button type="submit" class="btn btn-primary-action mt-1">Enregistrer</button>
    </div>
</form>







<?php
$content = ob_get_clean();
$title = "FORMAGEST | Mettre à jour : " . $module->getLabel();
require_once 'views/templates/default.php';
?>