<?php
ob_start()
?>

<h3>Mettre à jour <?= $effectif->getPrenom() . ' ' . $effectif->getNom() ?></h3>

<form action="<?= URL ?>effectifs/update/<?= $effectif->getId() ?>" method="post" enctype="multipart/form-data" autocomplete="off">

    <div class="grid gap-1 mb-2">
        <div class="col-lg-2 col-md-4 col-sm-6">
            <label for="date_creation">Date</label>
            <input class="form" type="date" name="date_creation" id="date_creation" value="<?= $effectif->getDate_Creation() ?>">
        </div>
    </div>

    <h4>Informations personnelles</h4>
    <div class="grid gap-1 mb-2">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="nom">Nom</label>
            <input class="form" type="text" name="nom" id="nom" value="<?= $effectif->getNom() ?>">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="prenom">Prénom</label>
            <input class="form" type="text" name="prenom" id="prenom" value="<?= $effectif->getPrenom() ?>">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="nom_naissance">Nom naissance</label>
            <input class="form" type="text" name="nom_naissance" id="nom_naissance" value="<?= $effectif->getNom_Naissance() ?>">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="genre">Genre</label>
            <select name="genre" id="genre" class="form">
                <option value="<?= $effectif->getGenre() ?>"><?= $effectif->getGenre() ?></option>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
            </select>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="date_naissance">Date de naissance</label>
            <input class="form" type="date" name="date_naissance" id="date_naissance" value="<?= $effectif->getDate_Naissance() ?>">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="fonction">Fonction</label>
            <input class="form" type="text" name="fonction" id="fonction" value="<?= $effectif->getFonction() ?>">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="securite_sociale">Securite sociale</label>
            <input class="form" type="text" name="securite_sociale" id="securite_sociale" value="<?= $effectif->getSecurite_Sociale() ?>">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="opca">OPCA</label>
            <input class="form" type="text" name="opca" id="ocpa" value="<?= $effectif->getId_Opca() ?>">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="diplome">Diplome</label>
            <input class="form" type="text" name="diplome" id="diplome" value="<?= $effectif->getDiplome() ?>">
        </div>
    </div>

    <h4>Localisation</h4>
    <div class="grid gap-1 mb-2">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <label for="adresse">Adresse</label>
            <input class="form" type="text" name="adresse" id="adresse" value="<?= $effectif->getAdresse() ?>">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="code_postal">Code postal</label>
            <input class="form" type="text" name="code_postal" id="code_postal" value="<?= $effectif->getCode_Postal() ?>">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="ville">Ville</label>
            <input class="form" type="text" name="ville" id="ville" value="<?= $effectif->getVille() ?>">
        </div>
    </div>

    <h4>Coordonnées</h4>
    <div class="grid gap-1 mb-2">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="telephone">Téléphone</label>
            <input class="form" type="text" name="telephone" id="telephone" value="<?= $effectif->getTelephone() ?>">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="mail">Mail</label>
            <input class="form" type="text" name="mail" id="mail" value="<?= $effectif->getMail() ?>">
        </div>
    </div>
    <div class=" text-right">
        <button type="submit" class="btn btn-primary-action mt-1">Enregistrer</button>
    </div>

</form>



<?php
$content = ob_get_clean();
$title = "FORMAGEST | Mettre à jour " . $effectif->getPrenom() . ' ' . $effectif->getNom();
require_once 'views/templates/default.php';
?>