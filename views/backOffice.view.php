<?php

ob_start()
?>

<h3>Back Office</h3>

<div class="grid gap-2 mb-2">
    <div class="card border-blue-hover col-lg-4 col-md-6 col-sm-12">
        <h3>Entreprises</h3>
        <div class="flex-row mb-2">
            <img src="https://img.icons8.com/color-glass/100/000000/company.png" />
            <span style="font-size: 4rem; font-weight:200;padding-left:1.5rem;margin-left: 1.5rem; border-left: 2px solid var(--border);"><?= $stat->getNbEntreprise() ?></span>
        </div>
        <a href="<?= URL ?>entreprises" class="btn btn-primary-action">Voir plus</a>
    </div>

    <div class="card border-blue-hover col-lg-4 col-md-6 col-sm-12">
        <h3>Organismes de formation</h3>
        <div class="flex-row mb-2">
            <img src="https://img.icons8.com/color-glass/100/000000/school.png" />
            <span style="font-size: 4rem; font-weight:200;padding-left:1.5rem;margin-left: 1.5rem; border-left: 2px solid var(--border);"><?= $stat->getNbOrganismeFormation() ?></span>
        </div>
        <a href="<?= URL ?>organismes-de-formation" class="btn btn-primary-action">Voir plus</a>
    </div>

    <div class="card border-blue-hover col-lg-4 col-md-6 col-sm-12">
        <h3>OPCAs</h3>
        <div class="flex-row mb-2">
            <img src="https://img.icons8.com/color-glass/100/000000/money-transfer.png" />
            <span style="font-size: 4rem; font-weight:200;padding-left:1.5rem;margin-left: 1.5rem; border-left: 2px solid var(--border);"><?= $stat->getNbOpca() ?></span>
        </div>
        <a href="<?= URL ?>opcas" class="btn btn-primary-action">Voir plus</a>
    </div>

    <div class="card border-blue-hover col-lg-4 col-md-6 col-sm-12">
        <h3>Programmes de formations</h3>

        <div class="flex-row mb-2">
            <img src="https://img.icons8.com/color-glass/100/000000/training.png" class="d-block" />
            <span style="font-size: 4rem; font-weight:200;padding-left:1.5rem;margin-left: 1.5rem; border-left: 2px solid var(--border);"><?= $stat->getNbProgramme() ?></span>
        </div>
        <a href="#" class="btn btn-primary-action">Voir plus</a>
    </div>

    <div class="card border-blue-hover col-lg-4 col-md-6 col-sm-12">
        <h3>Modules</h3>

        <div class="flex-row mb-2">
            <img src="https://img.icons8.com/color-glass/100/000000/module.png" class="d-block" />
            <span style="font-size: 4rem; font-weight:200;padding-left:1.5rem;margin-left: 1.5rem; border-left: 2px solid var(--border);">X</span>
        </div>
        <a href="#" class="btn btn-primary-action">Voir plus</a>
    </div>
    <div class="card border-blue-hover col-lg-4 col-md-6 col-sm-12">
        <h3>Effectifs</h3>
        <div class="flex-row mb-2">
            <img src="https://img.icons8.com/color-glass/100/000000/conference.png" class="d-block" />
            <span style="font-size: 4rem; font-weight:200;padding-left:1.5rem;margin-left: 1.5rem; border-left: 2px solid var(--border);"><?= $stat->getNbEffectif() ?></span>
        </div>
        <a href="#" class="btn btn-primary-action">Voir plus</a>
    </div>
    <div class="card border-blue-hover col-lg-4 col-md-6 col-sm-12">
        <h3>Formateurs</h3>
        <div class="flex-row mb-2">
            <img src="https://img.icons8.com/color-glass/100/000000/training.png" class="d-block" />
            <span style="font-size: 4rem; font-weight:200;padding-left:1.5rem;margin-left: 1.5rem; border-left: 2px solid var(--border);"><?= $stat->getNbFormateur() ?></span>
        </div>
        <a href="#" class="btn btn-primary-action">Voir plus</a>
    </div>

    <div class="card border-blue-hover col-lg-4 col-md-6 col-sm-12">
        <h3>Salles</h3>
        <div class="flex-row mb-2">
        <img src="https://img.icons8.com/color-glass/100/000000/point-objects.png" class="d-block"/>
            <span style="font-size: 4rem; font-weight:200;padding-left:1.5rem;margin-left: 1.5rem; border-left: 2px solid var(--border);">X</span>
        </div>
        <a href="#" class="btn btn-primary-action">Voir plus</a>
    </div>

</div>





<?php
$content = ob_get_clean();
$title = "FORMAGEST | Back Office";
require_once 'views/templates/default.php';
?>