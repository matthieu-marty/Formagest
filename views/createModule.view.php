<?php
ob_start()
?>

<h3 class="mb-2">Ajouter un module</h3>

<form action="<?= URL ?>modules/save" method="post" enctype="multipart/form-data" autocomplete="off">
<div class="grid gap-1 mb-2">
        <div class="col-12">
            <label for="label">Label</label>
            <input class="form" type="text" name="label" id="label" value="">
        </div>
        <div class="col-12">
            <label for="objectif_pedagogique">Objectif pédagogique</label>
            <input class="form" type="text" name="objectif_pedagogique" id="objectif_pedagogique" value="">
        </div>
        <div class="col-12">
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="20" class="form"></textarea>
        </div>
    </div>
</form>







<?php
$content = ob_get_clean();
$title = "FORMAGEST | Ajouter un module";
require_once 'views/templates/default.php';
?>