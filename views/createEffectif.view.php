<?php
ob_start()
?>

<h3>Nouvel effectif</h3>

<form action="<?= URL ?>effectifs/save/<?= $id ?>" method="post" enctype="multipart/form-data" autocomplete="off">

    <div class="grid gap-1 mb-2">
        <div class="col-lg-2 col-md-4 col-sm-6">
            <label for="date_creation">Date</label>
            <input class="form" type="date" name="date_creation" id="date_creation">
        </div>
    </div>

    <h4>Informations personnelles</h4>
    <div class="grid gap-1 mb-2">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="nom">Nom</label>
            <input class="form" type="text" name="nom" id="nom">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="prenom">Prénom</label>
            <input class="form" type="text" name="prenom" id="prenom">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="nom_naissance">Nom naissance</label>
            <input class="form" type="text" name="nom_naissance" id="nom_naissance">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="genre">Genre</label>
            <select name="genre" id="genre" class="form">
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
            </select>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="date_naissance">Date de naissance</label>
            <input class="form" type="date" name="date_naissance" id="date_naissance">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="fonction">Fonction</label>
            <input class="form" type="text" name="fonction" id="fonction">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="securite_sociale">Securite sociale</label>
            <input class="form" type="text" name="securite_sociale" id="securite_sociale">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="opca">OPCA</label>
            <input class="form" type="text" name="opca" id="ocpa">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="diplome">Diplome</label>
            <input class="form" type="text" name="diplome" id="diplome">
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
    <div class="border-top text-right">
        <button type="submit" class="btn mt-1">Enregistrer</button>
    </div>

</form>



<?php
$content = ob_get_clean();
$title = "FORMAGEST | Ajouter un effectif";
require_once 'views/templates/default.php';
?>