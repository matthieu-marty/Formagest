<?php
ob_start()
?>

<h3>Dossiers de formation</h3>

<div class="grid gap-2">
    <a href="<?= URL ?>montage-dossier" class="card border-blue-hover col-lg-4 col-md-6 col-sm-12">
        <h3>Montage dossiers</h3>
        <img src="https://img.icons8.com/color-glass/100/000000/live-folder.png" class="d-block" />

    </a>

    <a href="#" class="card border-blue-hover col-lg-4 col-md-6 col-sm-12">
        <h3>Dossiers cloturés</h3>
        <div class="flex-row">
            <img src="https://img.icons8.com/color-glass/100/000000/package.png" />
            <span style="font-size: 4rem; font-weight:200;padding-left:1.5rem;margin-left: 1.5rem; border-left: 2px solid var(--border);">65</span>
        </div>
    </a>

    <a href="#" class="card border-blue-hover col-lg-4 col-md-6 col-sm-12">
        <h3>Planning de formation</h3>
        <img src="https://img.icons8.com/color-glass/100/000000/tear-off-calendar.png" class="d-block" />
    </a>

    <a href="<?= URL ?>dossiers-en-cours" target="_blank" class="card border-blue-hover col-lg-4 col-md-6 col-sm-12">
        <h3>Dossiers en cours</h3>
        <div class="flex-row">
            <img src="https://img.icons8.com/color-glass/100/000000/refresh-folder.png" class="d-block" />
            <span style="font-size: 4rem; font-weight:200;padding-left:1.5rem;margin-left: 1.5rem; border-left: 2px solid var(--border);">65</span>
        </div>
    </a>

</div>

<?php
$content = ob_get_clean();
$title = "FORMAGEST | Dossiers de formation";
require_once 'views/templates/default.php';
?>