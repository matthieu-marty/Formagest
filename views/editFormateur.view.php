<?php
ob_start()
?>

<h3>Mettre à jour <?= $formateur->getPrenom() . ' ' . $formateur->getNom() ?></h3>


<form action="<?= URL ?>formateurs/update/<?= $formateur->getId() ?>" method="post" enctype="multipart/form-data" autocomplete="off">

    <div class="grid gap-1 mb-2">
        <div class="col-lg-2 col-md-4 col-sm-6">
            <label for="date_creation">Date</label>
            <input class="form" type="date" name="date_creation" id="date_creation" value="<?= $formateur->getDate_Creation(); ?>">
        </div>
    </div>

    <h4>Informations personnelles</h4>
    <div class="grid gap-1 mb-2">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="nom">Nom</label>
            <input class="form" type="text" name="nom" id="nom" value="<?= $formateur->getNom(); ?>">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="prenom">Prénom</label>
            <input class="form" type="text" name="prenom" id="prenom" value="<?= $formateur->getPrenom(); ?>">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="discipline">Discipline</label>
            <input class="form" type="text" name="discipline" id="discipline" value="<?= $formateur->getDiscipline(); ?>">
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="code_naf">Code NAF</label>
            <input class="form" type="text" name="code_naf" id="code_naf" value="<?= $formateur->getCode_Naf(); ?>">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="numero_qualiopi">Numéro Qualiopi</label>
            <input class="form" type="text" name="numero_qualiopi" id="numero_qualiopi" value="<?= $formateur->getNumero_Qualiopi(); ?>">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="tva">TVA</label>
            <input class="form" type="text" name="tva" id="tva" value="<?= $formateur->getTva(); ?>">
        </div>
    </div>

    <h4>Localisation</h4>
    <div class="grid gap-1 mb-2">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <label for="adresse">Adresse</label>
            <input class="form" type="text" name="adresse" id="adresse" value="<?= $formateur->getAdresse(); ?>">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="code_postal">Code postal</label>
            <input class="form" type="text" name="code_postal" id="code_postal" value="<?= $formateur->getCode_Postal(); ?>">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="ville">Ville</label>
            <input class="form" type="text" name="ville" id="ville" value="<?= $formateur->getVille(); ?>">
        </div>
    </div>

    <h4>Coordonnées</h4>
    <div class="grid gap-1 mb-2">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="telephone">Téléphone</label>
            <input class="form" type="text" name="telephone" id="telephone" value="<?= $formateur->getTelephone(); ?>">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="mail">Mail</label>
            <input class="form" type="text" name="mail" id="mail" value="<?= $formateur->getMail(); ?>">
        </div>
    </div>
    <div class="border-top text-right">
        <button type="submit" class="btn btn-primary-action mt-1">Enregistrer</button>
    </div>

</form>







<?php
$content = ob_get_clean();
$title = "FORMAGEST | Mettre à jour " . $formateur->getPrenom() . ' ' . $formateur->getNom();
require_once 'views/templates/default.php';
?>