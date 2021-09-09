<?php
ob_start()
?>


<div class="page">
    <div class="subpage">
        <div class="header">
            <p class="title">RECEPISSE  DE DOCUMENTS DE FORMATION</p>
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
        <div class="grid mt-2">
            <div class="c1-6"></div>
            <div class="c5-6">
                <p class="details-italic">Intitulé de la formation</p>
                <p class="box title">[INTITULE FORMATION]</p>
            </div>
        </div>

        <div class="grid mt-2">
            <p class="c2-6">Stagiaire <span class="bold">[STAGIAIRE]</span></p>
            <p class="c2-6">Date début de stage <span class="bold">[DATE]</span></p>
            <p class="c2-6">Date fin de stage <span class="bold">[DATE]</span></p>
        </div>

        <p class="to-complete mt-3">Je soussigné, [STAGIAIRE] déclare avoir bien reçu ce jour de la part de [FORMATEUR] :</p>

        <div class="grid mt-2">
            <div class="c1-6">
                <div class="checkbox"></div>
            </div>
            <p class="c5-6 to-complete">Une attestation d'emargement avec les dates exacte de la formation</p>
        </div>
        <div class="grid mt-2">
            <div class="c1-6">
                <div class="checkbox"></div>
            </div>
            <p class="c5-6 to-complete">Une facture de [MONTANT] TTC</p>
        </div>
        <div class="grid mt-2">
            <div class="c1-6">
                <div class="checkbox"></div>
            </div>
            <p class="c5-6 to-complete">Une attestation de stage reprenant les caractéristiques et less détails de la formation</p>
        </div>
        <div class="grid mt-2">
            <div class="c1-6">
                <div class="checkbox"></div>
            </div>
            <p class="c5-6 to-complete">Une attestation des acquis avec les commentaires du formateur sur le ou les stagiaires</p>
        </div>
        <div class="grid mt-2">
            <div class="c1-6">
                <div class="checkbox"></div>
            </div>
            <p class="c5-6 to-complete">Un support de cours reprenant les éléments vus pendant la formation</p>
        </div>

        <div class="grid mt-4">
            <div class="c3-6">
                <p class="to-complete">Pour faire valoir ce que de droit,</p>
                <p class="to-complete mt-2">Le ........ / ........ / .................</p>
                <p class="to-complete mt-2">à ..................................................................</p>
            </div>
            <div class="c3-6">
                <p class="to-complete">Cachet et signature du responsable de l'entreprise</p>
            </div>

        </div>
    </div>
</div>







<?php
$content = ob_get_clean();
$title = "FORMAGEST | Récépissé de documents de formation";
require_once 'views/templates/print.php';
?>