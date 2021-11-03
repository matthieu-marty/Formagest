<?php
ob_start()
?>

<h3>Créer un module</h3>

<form class="grid gap-2" action="<?= URL ?>modules/save" method="post" enctype="multipart/form-data" autocomplete="off">
    <div class="col-12">
        <label for="label">Intitulé</label>
        <input type="text" id="label" name="label" class="form">
    </div>
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
            <label for="methode_pedagogique_1">Méthode</label>
            <select name="methode_pedagogique_1" id="methode_pedagogique_1" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-12">
            <label for="outils_supports_1">Outils / Supports</label>
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
            <label for="methode_pedagogique_2">Méthode</label>
            <select name="methode_pedagogique_2" id="methode_pedagogique_2" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-12">
            <label for="outils_supports_2">Outils / Supports</label>
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
            <label for="objectif_pedagogique_2">Intitulé</label>
            <textarea id="objectif_pedagogique_2" name="objectif_pedagogique_2" class="form" rows="1"></textarea>
        </div>
        <div class="col-12">
            <label for="objectif_partiel_3">Objectif Partiel 1</label>
            <textarea id="objectif_partiel_3" name="objectif_partiel_3" class="form" rows="2"></textarea>
        </div>
        <div class="col-12">
            <label for="contenu_sequence_3">Contenu de la séquence 1</label>
            <textarea id="contenu_sequence_3" name="contenu_sequence_3" class="form" rows="2"></textarea>
        </div>
        <div class="col-12">
            <label for="technique_pedagogique_3">Technique</label>
            <select name="technique_pedagogique_3" id="technique_pedagogique_3" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-12">
            <label for="methode_pedagogique_3">Méthode</label>
            <select name="methode_pedagogique_3" id="methode_pedagogique_3" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-12">
            <label for="outils_supports_3">Outils / Supports</label>
            <select name="outils_supports_3" id="outils_supports_3" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-12" style="margin-bottom: 1rem; padding-bottom: 2rem; border-bottom: 2px solid var(--border);">
            <label for="evaluation_3">Evaluation</label>
            <select name="evaluation_3" id="evaluation_3" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>

        <div class="col-12">
            <label for="objectif_partiel_4">Objectif Partiel 2</label>
            <textarea id="objectif_partiel_4" name="objectif_partiel_4" class="form" rows="2"></textarea>
        </div>
        <div class="col-12">
            <label for="contenu_sequence_4">Contenu de la séquence 2</label>
            <textarea id="contenu_sequence_4" name="contenu_sequence_4" class="form" rows="2"></textarea>
        </div>
        <div class="col-12">
            <label for="technique_pedagogique_4">Technique</label>
            <select name="technique_pedagogique_4" id="technique_pedagogique_4" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-12">
            <label for="methode_pedagogique_4">Méthode</label>
            <select name="methode_pedagogique_4" id="methode_pedagogique_4" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-12">
            <label for="outils_supports_4">Outils / Supports</label>
            <select name="outils_supports_4" id="outils_supports_4" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-12" style="margin-bottom: 1rem; padding-bottom: 2rem; border-bottom: 2px solid var(--border);">
            <label for="evaluation_4">Evaluation</label>
            <select name="evaluation_4" id="evaluation_4" class="form">
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
            <label for="objectif_pedagogique_3">Intitulé</label>
            <textarea id="objectif_pedagogique_3" name="objectif_pedagogique_3" class="form" rows="1"></textarea>
        </div>
        <div class="col-12">
            <label for="objectif_partiel_5">Objectif Partiel 1</label>
            <textarea id="objectif_partiel_5" name="objectif_partiel_5" class="form" rows="2"></textarea>
        </div>
        <div class="col-12">
            <label for="contenu_sequence_5">Contenu de la séquence 1</label>
            <textarea id="contenu_sequence_5" name="contenu_sequence_5" class="form" rows="2"></textarea>
        </div>
        <div class="col-12">
            <label for="technique_pedagogique_5">Technique</label>
            <select name="technique_pedagogique_5" id="technique_pedagogique_5" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-12">
            <label for="methode_pedagogique_5">Méthode</label>
            <select name="methode_pedagogique_5" id="methode_pedagogique_5" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-12">
            <label for="outils_supports_5">Outils / Supports</label>
            <select name="outils_supports_5" id="outils_supports_5" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-12" style="margin-bottom: 1rem; padding-bottom: 2rem; border-bottom: 2px solid var(--border);">
            <label for="evaluation_5">Evaluation</label>
            <select name="evaluation_5" id="evaluation_5" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>

        <div class="col-12">
            <label for="objectif_partiel_6">Objectif Partiel 2</label>
            <textarea id="objectif_partiel_6" name="objectif_partiel_6" class="form" rows="2"></textarea>
        </div>
        <div class="col-12">
            <label for="contenu_sequence_6">Contenu de la séquence 2</label>
            <textarea id="contenu_sequence_6" name="contenu_sequence_6" class="form" rows="2"></textarea>
        </div>
        <div class="col-12">
            <label for="technique_pedagogique_6">Technique</label>
            <select name="technique_pedagogique_6" id="technique_pedagogique_6" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-12">
            <label for="methode_pedagogique_6">Méthode</label>
            <select name="methode_pedagogique_6" id="methode_pedagogique_6" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-12">
            <label for="outils_supports_6">Outils / Supports</label>
            <select name="outils_supports_6" id="outils_supports_6" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-12" style="margin-bottom: 1rem; padding-bottom: 2rem; border-bottom: 2px solid var(--border);">
            <label for="evaluation_6">Evaluation</label>
            <select name="evaluation_6" id="evaluation_6" class="form">
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
            <label for="objectif_pedagogique_4">Intitulé</label>
            <textarea id="objectif_pedagogique_4" name="objectif_pedagogique_4" class="form" rows="1"></textarea>
        </div>
        <div class="col-12">
            <label for="objectif_partiel_7">Objectif Partiel 1</label>
            <textarea id="objectif_partiel_7" name="objectif_partiel_7" class="form" rows="2"></textarea>
        </div>
        <div class="col-12">
            <label for="contenu_sequence_7">Contenu de la séquence 1</label>
            <textarea id="contenu_sequence_7" name="contenu_sequence_7" class="form" rows="2"></textarea>
        </div>
        <div class="col-12">
            <label for="technique_pedagogique_7">Technique</label>
            <select name="technique_pedagogique_7" id="technique_pedagogique_7" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-12">
            <label for="methode_pedagogique_7">Méthode</label>
            <select name="methode_pedagogique_7" id="methode_pedagogique_7" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-12">
            <label for="outils_supports_7">Outils / Supports</label>
            <select name="outils_supports_7" id="outils_supports_7" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-12" style="margin-bottom: 1rem; padding-bottom: 2rem; border-bottom: 2px solid var(--border);">
            <label for="evaluation_7">Evaluation</label>
            <select name="evaluation_7" id="evaluation_7" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>

        <div class="col-12">
            <label for="objectif_partiel_8">Objectif Partiel 2</label>
            <textarea id="objectif_partiel_8" name="objectif_partiel_8" class="form" rows="2"></textarea>
        </div>
        <div class="col-12">
            <label for="contenu_sequence_8">Contenu de la séquence 2</label>
            <textarea id="contenu_sequence_8" name="contenu_sequence_8" class="form" rows="2"></textarea>
        </div>
        <div class="col-12">
            <label for="technique_pedagogique_8">Technique</label>
            <select name="technique_pedagogique_8" id="technique_pedagogique_8" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-12">
            <label for="methode_pedagogique_8">Méthode</label>
            <select name="methode_pedagogique_8" id="methode_pedagogique_8" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-12">
            <label for="outils_supports_8">Outils / Supports</label>
            <select name="outils_supports_8" id="outils_supports_8" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
        <div class="col-12" style="margin-bottom: 1rem; padding-bottom: 2rem; border-bottom: 2px solid var(--border);">
            <label for="evaluation_8">Evaluation</label>
            <select name="evaluation_8" id="evaluation_8" class="form">
                <option value="Non">Non</option>
                <option value="Oui">Oui</option>
            </select>
        </div>
    </div>
    <div class="col-12 text-right">
        <button type="submit" class="btn btn-primary-action mt-1">Enregistrer</button>
    </div>
</form>

<?php
$content = ob_get_clean();
$title = "FORMAGEST | Créer un module";
require_once 'views/templates/default.php';
?>