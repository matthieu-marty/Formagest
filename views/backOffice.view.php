<?php

ob_start()
?>

<h3>Back Office</h3>

<div class="grid gap-2 mb-2">

    <a href="<?= URL ?>entreprises" class="card col-lg-4 col-md-6 col-sm-12">
        <h3>Entreprises</h3>
        <div class="flex-row">
            <span class="iconify icon" data-icon="fluent:building-20-regular" data-inline="false"></span>
            <span style="font-size: 4rem; font-weight:200;padding-left:1.5rem;margin-left: 1.5rem; border-left: 2px solid var(--border);"><?= $stat->getNbEntreprise() ?></span>
        </div>
    </a>

    <a href="<?= URL ?>organismes-de-formation" class="card col-lg-4 col-md-6 col-sm-12">
        <h3>Organismes de formation</h3>
        <div class="flex-row">
            <span class="iconify icon" data-icon="fluent:building-retail-toolbox-20-regular" data-inline="false"></span>
            <span style="font-size: 4rem; font-weight:200;padding-left:1.5rem;margin-left: 1.5rem; border-left: 2px solid var(--border);"><?= $stat->getNbOrganismeFormation() ?></span>
        </div>
    </a>

    <a href="<?= URL ?>opcas" class="card col-lg-4 col-md-6 col-sm-12">
        <h3>OPCAs</h3>
        <div class="flex-row">
            <span class="iconify icon" data-icon="fluent:building-bank-20-regular" data-inline="false"></span>
            <span style="font-size: 4rem; font-weight:200;padding-left:1.5rem;margin-left: 1.5rem; border-left: 2px solid var(--border);"><?= $stat->getNbOpca() ?></span>
        </div>
    </a>

    <a href="#" class="card col-lg-4 col-md-6 col-sm-12">
        <h3>Programmes de formations</h3>

        <div class="flex-row">
            <span class="iconify icon" data-icon="fluent:notebook-24-regular" data-inline="false"></span>
            <span style="font-size: 4rem; font-weight:200;padding-left:1.5rem;margin-left: 1.5rem; border-left: 2px solid var(--border);"><?= $stat->getNbProgramme() ?></span>
        </div>
    </a>

    <a href="<?= URL ?>modules" class="card col-lg-4 col-md-6 col-sm-12">
        <h3>Modules</h3>

        <div class="flex-row">
            <span class="iconify icon" data-icon="fluent:receipt-cube-20-regular" data-inline="false"></span>
            <span style="font-size: 4rem; font-weight:200;padding-left:1.5rem;margin-left: 1.5rem; border-left: 2px solid var(--border);"><?= $stat->getNbModule() ?></span>
        </div>
    </a>

    <a href="#" class="card col-lg-4 col-md-6 col-sm-12">
        <h3>Effectifs</h3>
        <div class="flex-row">
            <span class="iconify icon" data-icon="fluent:people-community-20-regular" data-inline="false"></span>
            <span style="font-size: 4rem; font-weight:200;padding-left:1.5rem;margin-left: 1.5rem; border-left: 2px solid var(--border);"><?= $stat->getNbEffectif() ?></span>
        </div>
    </a>

    <a href="<?= URL ?>formateurs" class="card col-lg-4 col-md-6 col-sm-12">
        <h3>Formateurs</h3>
        <div class="flex-row">
            <span class="iconify icon" data-icon="fluent:screen-person-20-regular" data-inline="false"></span>
            <span style="font-size: 4rem; font-weight:200;padding-left:1.5rem;margin-left: 1.5rem; border-left: 2px solid var(--border);"><?= $stat->getNbFormateur() ?></span>
        </div>
    </a>

    <a href="<?= URL ?>salles" class="card col-lg-4 col-md-6 col-sm-12">
        <h3>Salles</h3>
        <div class="flex-row">
            <span class="iconify icon" data-icon="fluent:location-20-regular" data-inline="false"></span>
            <span style="font-size: 4rem; font-weight:200;padding-left:1.5rem;margin-left: 1.5rem; border-left: 2px solid var(--border);"><?= $stat->getNbSalle() ?></span>
        </div>
    </a>

</div>





<?php
$content = ob_get_clean();
$title = "FORMAGEST | Back Office";
require_once 'views/templates/default.php';
?>