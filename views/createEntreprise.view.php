<?php
ob_start()
?>

<h3>Nouvelle Entreprise</h3>

<form action="<?= URL ?>entreprises/save" method="post" enctype="multipart/form-data" autocomplete="off">

    <div class="grid gap-1 mb-2">
        <div class="col-lg-2 col-md-4 col-sm-6">
            <label for="date_creation">Date</label>
            <input class="form" type="date" name="date_creation" id="date_creation" value="">
        </div>
    </div>

    <h4>Entreprise</h4>
    <div class="grid gap-1 mb-2">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="enseigne">Enseigne</label>
            <input class="form" type="text" name="enseigne" id="enseigne">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="siret">Siret</label>
            <input class="form" type="text" name="siret" id="siret">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="code_naf">Code naf</label>
            <input class="form" type="text" name="code_naf" id="code_naf">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="forme_juridique">Forme Juridique</label>
            <select name="forme_juridique" id="forme_juridique" class="form">
                <option value="SAS">SAS</option>
                <option value="AE">AE</option>
                <option value="SARL">SARL</option>
                <option value="EURL">EURL</option>
                <option value="Autre">Autre</option>
            </select>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <label for="activite">Activite</label>
            <input class="form" type="text" name="activite" id="activite">
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
    <div class="text-right">
        <button type="submit" class="btn">Enregistrer</button>
    </div>

</form>



<?php
$content = ob_get_clean();
$title = "FORMAGEST | Ajouter une entreprise";
require_once 'views/templates/default.php';
?>