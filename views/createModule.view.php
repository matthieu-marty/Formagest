<?php
ob_start()
?>

<h3>Créer un module</h3>

<form class="grid gap-2" action="<?= URL ?>modules/save" method="post" enctype="multipart/form-data" autocomplete="off">
    <div class="col-lg-3 col-md-6 col-sm-12 card grid gap-1">
        <div class="col-12 flex-row">
            <h4><span style="border: 2px solid var(--text-color);border-radius: 50%; padding: 0.15rem 0.7rem;">1</span> Objectif pédagogique</h4>
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
        <div class="col-12" style="margin-bottom: 1rem; padding-bottom: 2rem; border-bottom: 2px solid var(--border);">
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
        <div class="col-12" style="margin-bottom: 1rem; padding-bottom: 2rem; border-bottom: 2px solid var(--border);">
            <label for="evaluation_2">Evaluation</label>
            <select name="evaluation_2" id="evaluation_2" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 card grid gap-1">
        <div class="col-12 flex-row">
            <h4><span style="border: 2px solid var(--text-color);border-radius: 50%; padding: 0.15rem 0.7rem;">2</span> Objectif pédagogique</h4>
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
        <div class="col-12" style="margin-bottom: 1rem; padding-bottom: 2rem; border-bottom: 2px solid var(--border);">
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
        <div class="col-12" style="margin-bottom: 1rem; padding-bottom: 2rem; border-bottom: 2px solid var(--border);">
            <label for="evaluation_2">Evaluation</label>
            <select name="evaluation_2" id="evaluation_2" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 card grid gap-1">
        <div class="col-12 flex-row">
            <h4><span style="border: 2px solid var(--text-color);border-radius: 50%; padding: 0.15rem 0.7rem;">3</span> Objectif pédagogique</h4>
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
        <div class="col-12" style="margin-bottom: 1rem; padding-bottom: 2rem; border-bottom: 2px solid var(--border);">
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
        <div class="col-12" style="margin-bottom: 1rem; padding-bottom: 2rem; border-bottom: 2px solid var(--border);">
            <label for="evaluation_2">Evaluation</label>
            <select name="evaluation_2" id="evaluation_2" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 card grid gap-1">
        <div class="col-12 flex-row">
            <h4> <span style="border: 2px solid var(--text-color);border-radius: 50%; padding: 0.15rem 0.7rem;">4</span> Objectif pédagogique</h4>
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
        <div class="col-12" style="margin-bottom: 1rem; padding-bottom: 2rem; border-bottom: 2px solid var(--border);">
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
        <div class="col-12" style="margin-bottom: 1rem; padding-bottom: 2rem; border-bottom: 2px solid var(--border);">
            <label for="evaluation_2">Evaluation</label>
            <select name="evaluation_2" id="evaluation_2" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
    </div>

</form>
<div class=" text-right">
    <button type="submit" class="btn btn-primary-action mt-1">Enregistrer</button>
</div>










<?php
$content = ob_get_clean();
$title = "FORMAGEST | Créer un module";
require_once 'views/templates/default.php';
?>