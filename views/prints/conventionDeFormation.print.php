<?php
ob_start()
?>

<div class="page">
    <div class="subpage">
        <div class="header">
            <p class="title">CONVENTION DE FORMATION</h3>
            <p class="title">Entre [FORMATEUR] et [STAGIAIRE]</h4>
            <p class="details">Client: [REF_CLIENT] - Ref: [TC433-21A11]</p>
        </div>
        <div class="grid">
            <div class="c1-6">
                [IMG]

            </div>
            <div class="c2-6">
                <p>Entre les soussignés</p>
                <p class="bold">[FORMATEUR]</p>
                <p>[ADRESSE_FORMATEUR]</p>
                <p>Siret: [SIRET]</p>
                <p>Numéro Déc. Activité [NUM_ACTIVITE]</p>
                <p>Auprès du préfet de la Région Occitanie</p>
                <p>Représenté par [FORMATEUR]</p>
            </div>
            <div class="c3-6">
                <p>et</p>
                <p class="bold">[ENTREPRISE]</p>
                <p>[ADRESSE_ENTREPRISE]</p>
                <p>[SIRET]</p>
                <p>Représenté par : [STAGIAIRE]</p>

            </div>
        </div>
        <p class="mt-1">Est conclue la convention de formation suivante (en application des dispositions du Livre IX du Code du Travail).</p>

        <p class="article">Article 1 - Descriptif de l'action</p>
        <p>En éxecution de la présente convention, [FORMATEUR] s'engage à organiser l'action de formation dans les conditions citées ci-dessous et dans les articles suivants.</p>

        <div class="grid">
            <p class="c2-6 bold">Programme de formation : </p>
            <p class="c4-6 mt-1">[TITRE DE LA FORMATION]</p>
            <p class="c3-6 bold">Stagiaires : [STAGIAIRE]</p>
            <p class="c3-6 bold">Déroulement : [PRESENTIEL / DISTANCIEL]</p>
        </div>
        <p class="bold">Nature et caractéristiques de l'action de formaiton :</p>
        <p>L'action de formation entre dans la catégorie des actions acquisition, d'entretien ou de perfectionnement des connaissances prévues par l'article L6313-1 du COde du Travail.</p>

        <div class="grid mt-1">
            <p class="c2-6 bold">Période et durée de la formation :</p>
            <div class="c2-6">
                <p>La formation aura lieu entre le</p>
                <p>Elle se déroulera sur une durée de </p>
            </div>
            <div class="c2-6">
                <p>[DATE] et le [DATE]</p>
                <p>[HEURE] heures</p>
            </div>
        </div>
        <p class="bold">Nom du ou des intervenants : [FORMATEUR]</p>
        <p class="bold">Nom du responsable pédagogique : [FORMATEUR]</p>
        <p class="mt-1">Le [DATE] de [HEURE] à [HEURE] / [SALLE]</p>
        <p>Le [DATE] de [HEURE] à [HEURE] / [SALLE]</p>
        <p>Le [DATE] de [HEURE] à [HEURE] / [SALLE]</p>
        <p>Le [DATE] de [HEURE] à [HEURE] / [SALLE]</p>
        <p>Le [DATE] de [HEURE] à [HEURE] / [SALLE]</p>
    </div>
</div>

<div class="page">
    <div class="subpage">
        <p class="title">CONVENTION DE FORMATION</h3>
        <p class="title">Entre [FORMATEUR] et [STAGIAIRE]</h4>
        <p class="details">Client: [REF_CLIENT] - Ref: [TC433-21A11]</p>
    </div>
</div>

<div class="page">
    <div class="subpage">
        <p class="title">CONVENTION DE FORMATION</h3>
        <p class="title">Entre [FORMATEUR] et [STAGIAIRE]</h4>
        <p class="details">Client: [REF_CLIENT] - Ref: [TC433-21A11]</p>
    </div>
</div>

<div class="page">
    <div class="subpage">
        <p class="title">CONVENTION DE FORMATION</h3>
        <p class="title">Entre [FORMATEUR] et [STAGIAIRE]</h4>
        <p class="details">Client: [REF_CLIENT] - Ref: [TC433-21A11]</p>
    </div>
</div>










<?php
$content = ob_get_clean();
$title = "FORMAGEST | Convention de formation";
require_once 'views/templates/print.php';
?>