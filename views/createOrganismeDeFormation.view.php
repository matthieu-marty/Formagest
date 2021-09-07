<?php
ob_start()
?>

<h3>Nouvel Organisme de formation</h3>

<form action="<?= URL ?>organismes-de-formation/save" method="post" enctype="multipart/form-data" autocomplete="off">

    <div class="grid gap-1 mb-2">
        <div class="col-lg-2 col-md-4 col-sm-6">
            <label for="date_creation">Date</label>
            <input class="form" type="date" name="date_creation" id="date_creation" value="">
        </div>
    </div>

    <h4>Organisme</h4>
    <div class="grid gap-1 mb-2">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="nom_commercial">Nom commercial</label>
            <input class="form" type="text" name="nom_commercial" id="nom_commercial">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="siret">Siret</label>
            <input class="form" type="text" name="siret" id="siret">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="code_ape">Code APE</label>
            <input class="form" type="text" name="code_ape" id="code_ape">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="numero_declaration">Numéro de déclaration</label>
            <input class="form" type="text" name="numero_declaration" id="numero_declaration">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="discipline">Discipline</label>
            <input class="form" type="text" name="discipline" id="discipline">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="numero_qualiopi">Numero Qualiopi</label>
            <input class="form" type="text" name="numero_qualiopi" id="numero_qualiopi">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="tva">TVA</label>
            <input class="form" type="text" name="tva" id="tva">
        </div>
    </div>

    <h4>Localisation</h4>
    <div class="grid gap-1 mb-2">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <label for="adresse">Adresse</label>
            <input class="form" type="text" name="adresse" id="adresse">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="code_postal">Code postal</label>
            <input class="form" type="text" name="code_postal" id="code_postal">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="ville">Ville</label>
            <input class="form" type="text" name="ville" id="ville">
        </div>
    </div>

    <h4>Coordonnées</h4>
    <div class="grid gap-1 mb-2">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="telephone">Téléphone</label>
            <input class="form" type="text" name="telephone" id="telephone">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="mail">Mail</label>
            <input class="form" type="text" name="mail" id="mail">
        </div>
    </div>
    <div class=" text-right">
        <button type="submit" class="btn btn-primary-action mt-1">Enregistrer</button>
    </div>

</form>



<?php
$content = ob_get_clean();
$title = "FORMAGEST | Ajouter un organisme de formation";
require_once 'views/templates/default.php';
?>