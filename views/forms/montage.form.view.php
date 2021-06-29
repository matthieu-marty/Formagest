<?php
ob_start()
?>

<h3>Fiche montage</h3>

<form action="<?= URL ?>" method="post" enctype="multipart/form-data" autocomplete="off">
    <div class="grid gap-1 mb-2">
        <div class="col-lg-2 col-md-6 col-sm-12">
            <label for="apporteur_affaire">Apporteur d'affaire</label>
            <input type="text" name="apporteur_affaire" id="apporteur_affaire" class="form">
        </div>
    </div>
    <h4>Client</h4>
    <div class="grid gap-1 mb-2">
        <div class="col-lg-2 col-md-4 col-sm-12">
            <label for="nom_client">Nom du client</label>
            <input type="text" name="nom_client" id="nom_client" class="form">
        </div>

        <div class="col-lg-2 col-md-4 col-sm-12">
            <label for="numero_client">N° CLient</label>
            <input type="text" name="numero_client" id="numero_client" class="form">
        </div>

        <div class="col-lg-2 col-md-4 col-sm-12">
            <label for="opca">OPCA</label>
            <select name="opca" id="opca" class="form">
                <option value=""></option>
                <option value="1">OPCA 1</option>
                <option value="2">OPCA 2</option>
            </select>
        </div>
    </div>
    <h4>Formation</h4>
    <div class="grid gap-1 mb-2">
        <div class="col-12">
            <label for="opca">Organisme de formation</label>
            <select name="opca" id="opca" class="form">
                <option value=""></option>
                <option value="1">OF 1</option>
                <option value="2">OF 2</option>
            </select>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
            <label for="formateur_1">Formateur 1</label>
            <select name="formateur_1" id="formateur_1" class="form">
                <option value=""></option>
                <option value="1">Formateur 1</option>
                <option value="2">Formateur 2</option>
            </select>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <label for="formateur_2">Formateur 2</label>
            <select name="formateur_2" id="formateur2" class="form">
                <option value=""></option>
                <option value="1">Formateur 1</option>
                <option value="2">Formateur 2</option>
            </select>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <label for="formateur_3">Formateur 3</label>
            <select name="formateur_3" id="formateur_3" class="form">
                <option value=""></option>
                <option value="1">Formateur 1</option>
                <option value="2">Formateur 2</option>
            </select>
        </div>

        <div class="col-12">
            <label for="nom_des_stagiaires">Noms des stagiaires</label>
            <textarea id="nom_des_stagiaires" name="nom_des_stagiaires" class="form" rows="3"></textarea>
        </div>
    </div>
    <h4>Déroulement</h4>
    <div class="grid gap-1 mb-2">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <label for="type_formation">Type de formation</label>
            <select name="type_formation" id="type_formation" class="form">
                <option value=""></option>
                <option value="Collectif">Collectif</option>
                <option value="Individuel">Individuel</option>
                <option value="Mixte">Mixte</option>
            </select>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <label for="type_formation">Modalités</label>
            <select name="type_formation" id="type_formation" class="form">
                <option value=""></option>
                <option value="Présentiel">Présentiel</option>
                <option value="A distance">A distance</option>
                <option value="Mixte">Mixte</option>
            </select>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <label for="type_formation">Déroulement</label>
            <select name="type_formation" id="type_formation" class="form">
                <option value=""></option>
                <option value="Inte-entreprise">Inter-entreprise</option>
                <option value="Intra-entreprise">Intra-entreprise</option>
                <option value="Mixte">Mixte</option>
            </select>
        </div>
    </div>
    <h4>Programme</h4>
    <div class="grid gap-1 mb-2">
        <div class="col-12">
            <label for="intitule_programme">Intitulé du programme</label>
            <select name="intitule_programme" id="intitule_programme" class="form">
                <option value=""></option>
                <option value="1">Programme 1</option>
                <option value="2">Programme 2</option>
                <option value="3">Programme 3</option>
            </select>
        </div>

        <div class="col-lg-2 col-md-4 col-sm-6">
            <label for="heures_formation">Heures de formation</label>
            <input type="number" value="0" min="0" max="1000" name="heures_formation" id="heures_formation" class="form">
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
            <label for="tarif_horaire">Tarif horaire</label>
            <input type="number" value="0" min="0" max="1000" name="tarif_horaire" id="tarif_horaire" class="form">
        </div>
        <div class="col-lg-2 col-md-4 col-sm-12">
            <label for="montant_total">Montant total de la formation</label>
            <input type="text" name="montant_total" id="montant_total" class="form">
        </div>
    </div>
    <h4>Lieux de stage</h4>
    <div class="grid gap-1 mb-2">
        <div class="col-lg-7 col-md-12 col-sm-12">
            <label for="lieu_stage_1">Lieu de stage 1</label>
            <input type="text" name="lieu_stage_1" id="lieu_stage_1" class="form">
        </div>
        <div class="col-lg-7 col-md-12 col-sm-12">
            <label for="lieu_stage_2">Lieu de stage 2</label>
            <input type="text" name="lieu_stage_2" id="lieu_stage_2" class="form">
        </div>
        <div class="col-lg-7 col-md-12 col-sm-12">
            <label for="lieu_stage_3">Lieu de stage 3</label>
            <input type="text" name="lieu_stage_3" id="lieu_stage_3" class="form">
        </div>
    </div>
    <h4>Commentaires</h4>
    <div class="mb-2">
        <label for="commentairesl">Commentaires</label>
        <textarea id="Commentaires" name="commentaire" class="form" rows="6"></textarea>
    </div>

    <div class="border-top text-right">
        <button type="submit" class="btn btn-primary-action btn-primary-action-blue mt-1">Enregistrer</button>
    </div>


</form>



<?php
$content = ob_get_clean();
$title = "FORMAGEST | Fiche montage";
require_once 'views/templates/default.php';
?>