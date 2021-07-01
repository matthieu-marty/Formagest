<?php
ob_start()
?>

<h3>Dossiers de formation</h3>

<div class="grid gap-2">

    <div class="card border-blue-hover col-lg-4 col-md-6 col-sm-12">
        <h3>Dossiers en cours</h3>
        <div class="flex-row mb-2">
            <img src="https://img.icons8.com/color-glass/100/000000/training.png" class="d-block" />
            <span style="font-size: 4rem; font-weight:200;padding-left:1.5rem;margin-left: 1.5rem; border-left: 2px solid var(--border);">65</span>
        </div>
        <a href="<?= URL ?>dossiers-en-cours" target="_blank" class="btn btn-primary-action">Tableau de suivi</a>
    </div>
    <div class="card border-blue-hover col-lg-4 col-md-6 col-sm-12">
        <h3>Dossiers cloturés</h3>
        <div class="flex-row mb-2">
            <img src="https://img.icons8.com/color-glass/100/000000/package.png" />
            <span style="font-size: 4rem; font-weight:200;padding-left:1.5rem;margin-left: 1.5rem; border-left: 2px solid var(--border);">65</span>
        </div>

        <a href="#" class="btn btn-primary-action">Plus d'infos</a>
    </div>
    <div class="card border-blue-hover col-lg-4 col-md-6 col-sm-12">
        <h3>Monter un dossier</h3>
        <img src="https://img.icons8.com/color-glass/100/000000/add-list.png" class="d-block mb-2" />
        <a href="#" class="btn btn-primary-action">Individuel</a>
        <a href="#" class="btn btn-primary-action">Collectif</a>
    </div>
    <div class="card border-blue-hover col-lg-4 col-md-6 col-sm-12">
        <h3>Planning de formation</h3>
        <img src="https://img.icons8.com/color-glass/100/000000/tear-off-calendar.png" class="d-block mb-2" />
        <a href="#" class="btn btn-primary-action">Planning de formation</a>
    </div>

</div>

<?php
$content = ob_get_clean();
$title = "FORMAGEST | Dossiers de formation";
require_once 'views/templates/default.php';
?>