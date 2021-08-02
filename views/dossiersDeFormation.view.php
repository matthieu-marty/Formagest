<?php
ob_start()
?>

<h3>Dossiers de formation</h3>

<div class="grid gap-2">
    <a href="<?= URL ?>montage-dossier" class="card border-blue-hover col-lg-4 col-md-6 col-sm-12">
        <h3>Montage dossiers</h3>
        <span class="iconify icon" data-icon="fluent:folder-add-20-regular" data-inline="false"></span>
    </a>

    <a href="#" class="card border-blue-hover col-lg-4 col-md-6 col-sm-12">
        <h3>Dossiers cloturés</h3>
        <div class="flex-row">
        <span class="iconify icon" data-icon="fluent:folder-link-20-regular" data-inline="false"></span>
            <span style="font-size: 4rem; font-weight:200;padding-left:1.5rem;margin-left: 1.5rem; border-left: 2px solid var(--border);">65</span>
        </div>
    </a>

    <a href="#" class="card border-blue-hover col-lg-4 col-md-6 col-sm-12">
        <h3>Planning de formation</h3>
        <span class="iconify icon" data-icon="fluent:calendar-ltr-20-regular" data-inline="false"></span>
    </a>

    <a href="<?= URL ?>dossiers-en-cours" target="_blank" class="card border-blue-hover col-lg-4 col-md-6 col-sm-12">
        <h3>Dossiers en cours</h3>
        <div class="flex-row">
        <span class="iconify icon" data-icon="fluent:folder-sync-20-regular" data-inline="false"></span>
            <span style="font-size: 4rem; font-weight:200;padding-left:1.5rem;margin-left: 1.5rem; border-left: 2px solid var(--border);">65</span>
        </div>
    </a>

</div>

<?php
$content = ob_get_clean();
$title = "FORMAGEST | Dossiers de formation";
require_once 'views/templates/default.php';
?>