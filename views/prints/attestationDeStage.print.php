<?php
ob_start()
?>

<div class="page">
    <div class="subpage">
        <div class="header">
            <p class="title">ATTESTATION DE STAGE</p>
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
            Je soussigné [FORMATEUR] agissant en qualité de formateur de l'organisme de formation [FORMATEUR]
            enregistré sous le numéro de déclaration d'activité N° déc. act. : [NUMERO] auprès du préfet de la région Occitanie,
            certifie par la présente que, conformément au décret N° 2020-1310 du 29 octobre 2020, il a été décidé d'un commun accord
            avec le stagiaire de maintenir tout ou partie de la formation suivante :
        </p>

        <div class="grid mt-2">
            <div class="c3-6">
                <p class="text-center">Nom du stagiaire <span class="bold">[STAGIAIRE]</span> </p>
            </div>
            <div class="c3-6 ">
                <p class="text-center">de l'entreprise <span class="bold">[STAGIAIRE]</span> </p>
            </div>
        </div>

        <p class="text-center mt-2">A bien suivi la formation</p>
        <p class="box title">[INTITULE FORMATION]</p>

        <p class="mt-2">Qui s'est déroulé du <span class="bold">[DATE]</span> au <span class="bold">[DATE]</span> sur une durée de <span class="bold">[NB_HEURES]</span> heures</p>

        <p class="text-center mt-2">Les objectifs de la formation étaient les suivants</p>
        <div class="box">
            <p class="bold">[OBJECTIF]</p>
            <p class="bold">[OBJECTIF]</p>
            <p class="bold">[OBJECTIF]</p>
            <p class="bold">[OBJECTIF]</p>
            <p class="bold">[OBJECTIF]</p>
            <p class="bold">[OBJECTIF]</p>
        </div>

        <div class="grid mt-2">

            <div class="c3-6">
                <p class="bold text-center">Pour l'entreprise</p>
                <p class="text-center">Le(la) stagiaire</p>
                <p class="text-center">[STAGIAIRE]</p>
                <p class="details-italic text-center">(cachet et signature)</p>
            </div>
            <div class="c3-6">
                <p class="bold text-center">Pour le centre de formation</p>
                <p class="text-center">Le(la) responsable</p>
                <p class="text-center">[RESPONSABLE]</p>
                <p class="details-italic text-center">(cachet et signature)</p>
            </div>

        </div>


    </div>



</div>



<?php
$content = ob_get_clean();
$title = "FORMAGEST | Attestation de stage";
require_once 'views/templates/print.php';
?>