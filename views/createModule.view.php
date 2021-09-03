<?php
ob_start()
?>

<h3>Créer un module</h3>

<div class="grid gap-1">
    <div class="col-lg-3 col-md-6 col-sm-12 card grid gap-1">
        <div class="col-12 flex-row">
            <h4>Objectif pédagogique</h4>
        </div>
        <div class="col-12">
            <label for="objectif_pedagogique_1">Intitulé</label>
            <textarea id="objectif_pedagogique_1" name="objectif_pedagogique_1" class="form" rows="1"></textarea>
        </div>
        <div class="col-12">
            <label for="objectif_partiel_1">Objectif Partiel 1</label>
            <textarea id="objectif_partiel_1" name="objectif_partiel_1" class="form" rows="2"></textarea>
        </div>
        <div class="col-12">
            <label for="contenu_sequence_1">Contenu de la séquence 1</label>
            <textarea id="contenu_sequence_1" name="contenu_sequence_1" class="form" rows="2"></textarea>
        </div>
        <div class="col-12">
            <label for="technique_pedagogique_1">Technique</label>
            <select name="technique_pedagogique_1" id="technique_pedagogique_1" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-12">
            <label for="outils_supports_1">Outils /supports</label>
            <select name="outils_supports_1" id="outils_supports_1" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-12" >
            <label for="evaluation_1">Evaluation</label>
            <select name="evaluation_1" id="evaluation_1" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>

        <div class="col-12">
            <label for="objectif_partiel_2">Objectif Partiel 2</label>
            <textarea id="objectif_partiel_2" name="objectif_partiel_2" class="form" rows="2"></textarea>
        </div>
        <div class="col-12">
            <label for="contenu_sequence_2">Contenu de la séquence 2</label>
            <textarea id="contenu_sequence_2" name="contenu_sequence_2" class="form" rows="2"></textarea>
        </div>
        <div class="col-12">
            <label for="technique_pedagogique_2">Technique</label>
            <select name="technique_pedagogique_2" id="technique_pedagogique_2" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-12">
            <label for="outils_supports_2">Outils /supports</label>
            <select name="outils_supports_2" id="outils_supports_2" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-12" >
            <label for="evaluation_2">Evaluation</label>
            <select name="evaluation_2" id="evaluation_2" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
    </div>




    <!-- <div class="col-lg-2 col-md-4 col-sm-12">
        <label for="date_creation">Date</label>
        <input class="form" type="text" name="date_creation" id="date_creation" value="">
        <label for="date_creation">Date</label>
        <input class="form" type="text" name="date_creation" id="date_creation" value="">
        <label for="date_creation">Date</label>
        <input class="form" type="text" name="date_creation" id="date_creation" value="">
    </div> -->
</div>










<?php
$content = ob_get_clean();
$title = "FORMAGEST | Créer un module";
require_once 'views/templates/default.php';
?>