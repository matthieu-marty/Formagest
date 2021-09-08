<?php
ob_start()
?>
<div class="page">
    <div class="subpage">

        <div class="header">
            <p class="title">DEVIS DE FORMATION</p>
            <p class="details">Client: [CLIENT] - Ref: [DOSSIER]</p>
        </div>

        <div class="grid">
            <div class="c1-6">
                [IMG]
            </div>

            <div class="c2-6">
                <p class="details-italic">Formateur / Organisme de formation</p>

                <div class="box">
                    <p class="bold">[FORMATEUR]</p>
                    <p>[ADRESSE]</p>
                    <p class="mt-1">Siret: [SIRET]</p>
                    <p>[TELEPHONE]</p>
                    <p>[MAIL]</p>
                </div>

            </div>

            <div class="c2-6">
                <p class="details-italic">Entreprise/Client</p>
                <div class="box">
                    <p class="bold">[ENTREPRISE]</p>
                    <p class="mt-1">[ADRESSE]</p>
                    <p>[CODE POSTAL]</p>
                    <p>tel : [TELEPHONE]</p>
                    <p>[MAIL]</p>
                </div>
            </div>
        </div>

        <div class="grid mt-2">
            <div class="c1-6">
                <p class="details">Code client</p>
                <div class="box">
                    <p class="bold">[NUM]</p>
                </div>
            </div>

            <div class="c2-6">
                <p class="details">N° Dossier</p>
                <div class="box">
                    <p class="bold">[NUM]</p>
                </div>
            </div>

            <div class="c1-6">
                <p class="details">Date devis</p>
                <div class="box">
                    <p class="bold">[DATE]</p>
                </div>
            </div>

            <div class="c2-6">
                <p class="details">N° Devis</p>
                <div class="box">
                    <p class="bold">[NUM]</p>
                </div>
            </div>
        </div>

        <p class="details mt-2">Intitulé de la formation</p>
        <p class="box title">[INTITULE FORMATION]</p>

        <div class="grid mt-2">
            <p class="c2-6">
                Stagiaire: [STAGIAIRE]
            </p>
            <p class="c2-6">
                Date debut de stage: [DATE]
            </p>
            <p class="c2-6">
                Date fin de stage : [DATE]
            <p>

        </div>

        <table class="mt-2">
            <tr>
                <th width="16.6%">QT heures</th>
                <th width="16.6%">Taux horaire</th>
                <th width="16.6%">Total HT</th>
                <th width="16.6%">TVA</th>
                <th width="33.2%">Total TTC</th>
            </tr>
            <tr>
                <td>[QT]</td>
                <td>[TAUX]</td>
                <td>[TOTAL]</td>
                <td>[TVA]</td>
                <td>[TTC]</td>
            </tr>
        </table>

        <p>Exonéré de TVA sselon l'article 261-4-4 du CGI</p>
        <p>Ce devis est valable 30 jours (sauf si disposition particulière indiquée dans la convention ou le contrat de formation.</p>

        <div class="grid mt-3">
            <div class="c3-6">
                <p class="details-italic text-center">Tampon et signature, suivi de la mention "Bon pour accord"</p>
                <div class="signature-box">

                </div>
            </div>
            <div class="c1-6">

            </div>

            <div class="c2-6">
                <p class="details-italic text-center">Tampon et signature</p>
                <div class="signature-box">

                </div>
            </div>
        </div>

        <p class="to-complete mt-3">Fait à .................................. le ..................................</p>

    </div>


</div>
</div>

<?php
$content = ob_get_clean();
$title = "FORMAGEST | Devis de formation";
require_once 'views/templates/print.php';
?>