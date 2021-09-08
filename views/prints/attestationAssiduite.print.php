<?php
ob_start()
?>

<div class="page">
    <div class="subpage">

        <div class="header">
            <p class="title">ATTESTATION D'ASSIDUITE</p>
            <p class="details">Client: [CLIENT] - Ref: [DOSSIER]</p>
        </div>


        <div class="grid">
            <div class="c1-6">
                [IMG]
            </div>

            <div class="c1-6">
                <p class="details-italic">Code client</p>

                <div class="box">
                    <p class="bold">[NUMER0]</p>
                </div>

            </div>

            <div class="c1-6">
                <p class="details-italic">N° Dossier</p>
                <div class="box">
                    <p class="bold">[NUMERO]</p>
                </div>
            </div>
            <div class="c3-6">
                <p class="details-italic">Nom de l'entreprise</p>
                <div class="box">
                    <p class="bold">[ENTREPRISE]</p>
                </div>
            </div>
        </div>

        <p class="mt-2">
            Je soussigné(e) [FORMATEUR] agissant en qualité de formateur de l'organisme de formation [FORMATEUR]
            enregistré sous le numéro de déclaration d'activité N° déc. act. : [NUEMRO] auprès du préfet de la région occitanie et de la DIRECCTE
            (Direction Régionale des Entreprises, de la Concurrence, de la Consommation, du Travail et de l'Emploi), atteste que :
        </p>

        <div class="grid mt-2">
            <div class="c3-6">
                <p class="text-center">Nom du stagiaire : <span class="bold">[STAGIAIRE]</span></p>

            </div>
            <div class="c3-6">
                <p class="text-center">de l'entreprise <span class="bold">[STAGIAIRE]</span></p>
            </div>

        </div>
        <p class="mt-1">A bien suivi la formation</p>
        <p class="box title">[INTITULE FORMATION]</p>

        <p class="mt-2">Qui s'esrt déroulé du <span class="bold">[DATE]</span> au <span class="bold">[DATE]</span></p>
        <p class="mt-2">Pour une durée réallisée de <span class="bold">[DUREE]</span> sur une durée prévue de <span class="bold">[DUREE]</span></p>

        <p class="mt-2">Résultats de l'évaluation des acquis jalonnant ou terminant la formation (examen, test, contrôle continu, etc.) :</p>
        <div class="to-complete-box-lg">

        </div>

        <div class="grid mt-3">
            <div class="c3-6">
                <p>Certifié exact par</p>
                <p class="bold">[FORMATEUR]</p>
                <p class="to-complete mt-2">Le ........ / ........ / .................</p>
                <p class="to-complete mt-2">à ..................................................................</p>
            </div>
            <div class="c3-6">
                <p>Cachet et signature de l'organisme de formation</p>
            </div>
        </div>

    </div>
</div>

<?php
$content = ob_get_clean();
$title = "FORMAGEST | Attestation d'assiduité";
require_once 'views/templates/print.php';
?>