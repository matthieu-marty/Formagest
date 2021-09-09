<?php
ob_start()
?>

<div class="page">
    <div class="subpage">
        <div class="header">
            <p class="title">ATTESTATION DE VALIDATION DES ACQUIS</p>
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


        <p class="text-center details-italic mt-2">(1 = Pas acquis / 2 = Partiellement acquis / 3 = Acquis / 4 = Parfaitement acquis)</p>
        <table>
            <tr>
                <th colspan="5" class="text-center bold">ATTESTATION DES ACQUIS DE LA FORMATION</th>
            </tr>
            <tr>
                <th width="70%" class="bold td-lg">OBJECTIF PEDAGOGIQUES DE LA FORMATION</th>
                <th width="7.5%" class="bold text-center">1</th>
                <th width="7.5%" class="bold text-center">2</th>
                <th width="7.5%" class="bold text-center">3</th>
                <th width="7.5%" class="bold text-center">4</th>
            </tr>
            <tr>
                <td class="td-lg">[OBJECTIF 1]</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="td-lg">[OBJECTIF 2]</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="td-lg">[OBJECTIF 3]</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="td-lg">[OBJECTIF 4]</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>

        <p class="details mt-3">Zone de commentaires et d'appréciation du formateur</p>
        <p class="to-complete-box-lg"></p>

        <div class="grid mt-3">
            <div class="c3-6">
                <p>Certifié exact par</p>
                <p class="bold">[FORMATEUR]</p>
                <p class="to-complete mt-2">Le ......... / ........ / ................</p>
                <p class="to-complete mt-2">à ................................</p>
            </div>
            <div class="c3-6">
                <p>Cachet et signature de l'organisme de formation</p>

            </div>
        </div>



    </div>
</div>


<?php
$content = ob_get_clean();
$title = "FORMAGEST | Attestation de validation des acquis";
require_once 'views/templates/print.php';
?>