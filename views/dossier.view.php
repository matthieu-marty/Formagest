<?php
ob_start()
?>

<h3>Dossier de formation : [REF DOSSIER]</h3>

<h4 class="card mb-2">[INTITULE FORMATION]</h4>

<div class="grid gap-2">
    <div class="col-6">
        <div class="card mb-2">
            <div class="flex-row">
                <span class="iconify icon-h4" data-icon="fluent:building-20-regular" data-inline="false"></span>
                <h4>Entreprise</h4>
            </div>

        </div>
        <div class="card">
            <div class="flex-row">
                <span class="iconify icon-h4" data-icon="fluent:building-20-regular" data-inline="false"></span>
                <h4>Stagiaire</h4>
            </div>

        </div>

    </div>
    <div class="card col-6">
        <div class="flex-row mb-1">
            <span class="iconify icon-h4" data-icon="fluent:folder-20-regular"></span>
            <h4>Documents à joindre au dossier</h4>
        </div>

        <div class="grid gap-1">
            <a href="#" class="card col-lg-3 col-md-6 col-sm-6">
                <p class="text-center mb-0"><span class="iconify icon" data-icon="fluent:document-bullet-list-20-regular" data-inline="false"></span></p>
                <p class="text-center text-bold mb-0">Convention</p>
            </a>

            <a href="#" class="card col-lg-3 col-md-6 col-sm-6">
                <p class="text-center mb-0"><span class="iconify icon" data-icon="fluent:document-bullet-list-20-regular" data-inline="false"></span></p>
                <p class="text-center text-bold mb-0">DPC</p>
            </a>

            <a href="#" class="card col-lg-3 col-md-6 col-sm-6">
                <p class="text-center mb-0"><span class="iconify icon" data-icon="fluent:document-bullet-list-20-regular" data-inline="false"></span></p>
                <p class="text-center text-bold mb-0">Programme</p>
            </a>

            <a href="#" class="card col-lg-3 col-md-6 col-sm-6">
                <p class="text-center mb-0"><span class="iconify icon" data-icon="fluent:document-bullet-list-20-regular" data-inline="false"></span></p>
                <p class="text-center text-bold mb-0">Fiche projet</p>
            </a>
            <a href="#" class="card col-lg-3 col-md-6 col-sm-6">
                <p class="text-center mb-0"><span class="iconify icon" data-icon="fluent:document-bullet-list-20-regular" data-inline="false"></span></p>
                <p class="text-center text-bold mb-0">Diagnostic</p>
            </a>
            <a href="#" class="card col-lg-3 col-md-6 col-sm-6">
                <p class="text-center mb-0"><span class="iconify icon" data-icon="fluent:document-bullet-list-20-regular" data-inline="false"></span></p>
                <p class="text-center text-bold mb-0">Pre-requis</p>
            </a>

        </div>
    </div>
</div>









<?php
$content = ob_get_clean();
$title = "FORMAGEST | Titre";
require_once 'views/templates/default.php';
?>