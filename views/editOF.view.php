<?php
ob_start()
?>

<h3>Mettre à jour <?= $of->getNom_Commercial() ?></h3>

<form action="<?= URL ?>organismes-de-formation/update/<?= $of->getId() ?>" method="post" enctype="multipart/form-data" autocomplete="off">

    <div class="grid gap-1 mb-2">
        <div class="col-lg-2 col-md-4 col-sm-6">
            <label for="date_creation">Date</label>
            <input class="form" type="date" name="date_creation" id="date_creation" value="<?= $of->getDate_Creation() ?>">
        </div>
    </div>

    <h4>Organisme</h4>
    <div class="grid gap-1 mb-2">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="nom_commercial">Nom commercial</label>
            <input class="form" type="text" name="nom_commercial" id="nom_commercial" value="<?= $of->getNom_Commercial() ?>">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="siret">Siret</label>
            <input class="form" type="text" name="siret" id="siret" value="<?= $of->getSiret() ?>">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="code_ape">Code APE</label>
            <input class="form" type="text" name="code_ape" id="code_ape" value="<?= $of->getCode_Ape() ?>">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="numero_declaration">Numéro de déclaration</label>
            <input class="form" type="text" name="numero_declaration" id="numero_declaration" value="<?= $of->getNumero_Declaration() ?>">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="discipline">Discipline</label>
            <input class="form" type="text" name="discipline" id="discipline" value="<?= $of->getDiscipline() ?>">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="numero_qualiopi">Numero Qualiopi</label>
            <input class="form" type="text" name="numero_qualiopi" id="numero_qualiopi" value="<?= $of->getNumero_Qualiopi() ?>">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="tva">TVA</label>
            <input class="form" type="text" name="tva" id="tva" value="<?= $of->getTva() ?>">
        </div>
    </div>

    <h4>Localisation</h4>
    <div class="grid gap-1 mb-2">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <label for="adresse">Adresse</label>
            <input class="form" type="text" name="adresse" id="adresse" value="<?= $of->getAdresse() ?>">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="code_postal">Code postal</label>
            <input class="form" type="text" name="code_postal" id="code_postal" value="<?= $of->getCode_Postal() ?>">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="ville">Ville</label>
            <input class="form" type="text" name="ville" id="ville" value="<?= $of->getVille() ?>">
        </div>
    </div>

    <h4>Coordonnées</h4>
    <div class="grid gap-1 mb-2">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="telephone">Téléphone</label>
            <input class="form" type="text" name="telephone" id="telephone" value="<?= $of->getTelephone() ?>">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="mail">Mail</label>
            <input class="form" type="text" name="mail" id="mail" value="<?= $of->getMail() ?>">
        </div>
    </div>
    <div class="border-top text-right">
        <button type="submit" class="btn mt-1">Enregistrer</button>
    </div>

</form>



<?php
$content = ob_get_clean();
$title = "FORMAGEST | Mettre à jour " . $of->getNom_Commercial();
require_once 'views/templates/default.php';
?>