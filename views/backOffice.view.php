<?php
ob_start()
?>

<h3>Back Office</h3>

<div class="grid gap-2 mb-2">

    <a href="<?= URL ?>entreprises" class="card col-lg-4 col-md-6 col-sm-12">
        <h4>Entreprises</h4>
        <div class="flex-row">
            <span class="iconify icon" data-icon="fluent:building-20-regular" data-inline="false"></span>
            <span style="font-size: 4rem; font-weight:200;padding-left:1.5rem;margin-left: 1.5rem; border-left: 2px solid var(--border);"><?= $stat->getNbEntreprise() ?></span>
        </div>
    </a>

    <a href="<?= URL ?>organismes-de-formation" class="card col-lg-4 col-md-6 col-sm-12">
        <h4>Organismes de formation</h4>
        <div class="flex-row">
            <span class="iconify icon" data-icon="fluent:building-retail-toolbox-20-regular" data-inline="false"></span>
            <span style="font-size: 4rem; font-weight:200;padding-left:1.5rem;margin-left: 1.5rem; border-left: 2px solid var(--border);"><?= $stat->getNbOrganismeFormation() ?></span>
        </div>
    </a>

    <a href="<?= URL ?>opcas" class="card col-lg-4 col-md-6 col-sm-12">
        <h4>OPCAs</h4>
        <div class="flex-row">
            <span class="iconify icon" data-icon="fluent:building-bank-20-regular" data-inline="false"></span>
            <span style="font-size: 4rem; font-weight:200;padding-left:1.5rem;margin-left: 1.5rem; border-left: 2px solid var(--border);"><?= $stat->getNbOpca() ?></span>
        </div>
    </a>


    <a href="#" class="card col-lg-4 col-md-6 col-sm-12">
        <h4>Effectifs</h4>
        <div class="flex-row">
            <span class="iconify icon" data-icon="fluent:people-community-20-regular" data-inline="false"></span>
            <span style="font-size: 4rem; font-weight:200;padding-left:1.5rem;margin-left: 1.5rem; border-left: 2px solid var(--border);"><?= $stat->getNbEffectif() ?></span>
        </div>
    </a>

    <a href="<?= URL ?>formateurs" class="card col-lg-4 col-md-6 col-sm-12">
        <h4>Formateurs</h4>
        <div class="flex-row">
            <span class="iconify icon" data-icon="fluent:screen-person-20-regular" data-inline="false"></span>
            <span style="font-size: 4rem; font-weight:200;padding-left:1.5rem;margin-left: 1.5rem; border-left: 2px solid var(--border);"><?= $stat->getNbFormateur() ?></span>
        </div>
    </a>

    <a href="<?= URL ?>salles" class="card col-lg-4 col-md-6 col-sm-12">
        <h4>Salles</h4>
        <div class="flex-row">
            <span class="iconify icon" data-icon="fluent:location-20-regular" data-inline="false"></span>
            <span style="font-size: 4rem; font-weight:200;padding-left:1.5rem;margin-left: 1.5rem; border-left: 2px solid var(--border);"><?= $stat->getNbSalle() ?></span>
        </div>
    </a>

    <a href="<?= URL ?>programmes" class="card col-lg-4 col-md-6 col-sm-12">
        <h4>Programmes</h4>
        <div class="flex-row">
            <span class="iconify icon" data-icon="fluent:learning-app-20-regular" data-inline="false"></span>
            <span style="font-size: 4rem; font-weight:200;padding-left:1.5rem;margin-left: 1.5rem; border-left: 2px solid var(--border);"><?= $stat->getNbProgramme() ?></span>
        </div>
    </a>

    <a href="<?= URL ?>modules" class="card col-lg-4 col-md-6 col-sm-12">
        <h4>Modules</h4>
        <div class="flex-row">
        <span class="iconify icon" data-icon="fluent:puzzle-piece-20-regular" data-inline="false"></span>
            <span style="font-size: 4rem; font-weight:200;padding-left:1.5rem;margin-left: 1.5rem; border-left: 2px solid var(--border);"><?= $stat->getNbModule() ?></span>
        </div>
    </a>


    


</div>





<?php
$content = ob_get_clean();
$title = "FORMAGEST | Back Office";
require_once 'views/templates/default.php';
?>