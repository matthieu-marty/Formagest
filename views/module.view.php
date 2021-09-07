<?php
ob_start()
?>

<h3><?= $module->getLabel() ?></h3>
<a href="<?= URL ?>modules"><span class="iconify action-icon action-icon-primary" data-icon="fluent:backspace-24-regular" data-inline="false"></span></a>

<div class="table-container-lg">
    <table>


        <thead>
            <tr>
                <th>Durée</th>
                <th>Objectif Pédagogique</th>
                <th>Objectif pédagogique partiel</th>
                <th>Contenu de la séquence</th>
                <th>Méthode pédagogique</th>
                <th>Technique pédégogique</th>
                <th>Outils/supports</th>
                <th>Evaluation</th>
            </tr>
        </thead>
        <tbody>
            <!-- INRODUCTION SESSION 1 -->
            <tr style="background-color: rgba(var(--primary), 0.05); color: rgb(var(--primary));">
                <td>X</td>
                <td>Identifier les différents éléments qui seront vus pedant le module</td>
                <td>Appréhender les éléments connus pour déterminer les éléments à apprendre</td>
                <td>Présentation du déroulement du module</td>
                <td>Expositive</td>
                <td>Présentation d'un plan structuré</td>
                <td>Diaporama PowerPoint</td>
                <td>Commenter</td>
            </tr>
            <!-- OBJECTIF PEDAGOGIQUE 1 -->
            <tr>
                <td rowspan="2">X</td>
                <td rowspan="2" style="font-weight: 500;"><?= $module->getObjectif_Pedagogique_1() ?></td>
                <td><?= $module->getObjectif_Partiel_1() ?></td>
                <td><?= $module->getContenu_Sequence_1() ?></td>
                <td><?= $module->getMethode_Pedagogique_1() ?></td>
                <td><?= $module->getTechnique_Pedagogique_1() ?></td>
                <td><?= $module->getOutils_Supports_1() ?></td>
                <td><?= $module->getEvaluation_1() ?></td>
            </tr>
            <tr style="background-color: #F7F7F7">
                <td><?= $module->getObjectif_Partiel_2() ?></td>
                <td><?= $module->getContenu_Sequence_2() ?></td>
                <td><?= $module->getMethode_Pedagogique_2() ?></td>
                <td><?= $module->getTechnique_Pedagogique_2() ?></td>
                <td><?= $module->getOutils_Supports_2() ?></td>
                <td><?= $module->getEvaluation_2() ?></td>
            </tr>
            <!-- OBJECTIF PEDAGOGIQUE 2 -->
            <tr>
                <td rowspan="2">X</td>
                <td rowspan="2" style="font-weight: 500;"><?= $module->getObjectif_Pedagogique_2() ?></td>
                <td><?= $module->getObjectif_Partiel_3() ?></td>
                <td><?= $module->getContenu_Sequence_3() ?></td>
                <td><?= $module->getMethode_Pedagogique_3() ?></td>
                <td><?= $module->getTechnique_Pedagogique_3() ?></td>
                <td><?= $module->getOutils_Supports_3() ?></td>
                <td><?= $module->getEvaluation_3() ?></td>
            </tr>
            <tr style="background-color: #F7F7F7">
                <td><?= $module->getObjectif_Partiel_4() ?></td>
                <td><?= $module->getContenu_Sequence_4() ?></td>
                <td><?= $module->getMethode_Pedagogique_4() ?></td>
                <td><?= $module->getTechnique_Pedagogique_4() ?></td>
                <td><?= $module->getOutils_Supports_4() ?></td>
                <td><?= $module->getEvaluation_4() ?></td>
            </tr>
            <!-- INRODUCTION SESSION 2 -->
            <tr style="background-color: rgba(var(--primary), 0.05); color: rgb(var(--primary)); border-top: 2px solid rgb(var(--primary));">
                <td>X</td>
                <td>Identifier les différents éléments qui seront vus pedant le module</td>
                <td>Appréhender les éléments connus pour déterminer les éléments à apprendre</td>
                <td>Présentation du déroulement du module</td>
                <td>Expositive</td>
                <td>Présentation d'un plan structuré</td>
                <td>Diaporama PowerPoint</td>
                <td>Commenter</td>
            </tr>

            <!-- OBJECTIF PEDAGOGIQUE 3 -->
            <tr>
                <td rowspan="2">X</td>
                <td rowspan="2" style="font-weight: 500;"><?= $module->getObjectif_Pedagogique_3() ?></td>
                <td><?= $module->getObjectif_Partiel_5() ?></td>
                <td><?= $module->getContenu_Sequence_5() ?></td>
                <td><?= $module->getMethode_Pedagogique_5() ?></td>
                <td><?= $module->getTechnique_Pedagogique_5() ?></td>
                <td><?= $module->getOutils_Supports_5() ?></td>
                <td><?= $module->getEvaluation_5() ?></td>
            </tr>
            <tr style="background-color: #F7F7F7">
                <td><?= $module->getObjectif_Partiel_6() ?></td>
                <td><?= $module->getContenu_Sequence_6() ?></td>
                <td><?= $module->getMethode_Pedagogique_6() ?></td>
                <td><?= $module->getTechnique_Pedagogique_6() ?></td>
                <td><?= $module->getOutils_Supports_6() ?></td>
                <td><?= $module->getEvaluation_6() ?></td>
            </tr>

            <!-- OBJECTIF PEDAGOGIQUE 4 -->
            <tr>
                <td rowspan="2">X</td>
                <td rowspan="2" style="font-weight: 500;"><?= $module->getObjectif_Pedagogique_4() ?></td>
                <td><?= $module->getObjectif_Partiel_7() ?></td>
                <td><?= $module->getContenu_Sequence_7() ?></td>
                <td><?= $module->getMethode_Pedagogique_7() ?></td>
                <td><?= $module->getTechnique_Pedagogique_7() ?></td>
                <td><?= $module->getOutils_Supports_7() ?></td>
                <td><?= $module->getEvaluation_7() ?></td>
            </tr>
            <tr style="background-color: #F7F7F7">
                <td><?= $module->getObjectif_Partiel_8() ?></td>
                <td><?= $module->getContenu_Sequence_8() ?></td>
                <td><?= $module->getMethode_Pedagogique_8() ?></td>
                <td><?= $module->getTechnique_Pedagogique_8() ?></td>
                <td><?= $module->getOutils_Supports_8() ?></td>
                <td><?= $module->getEvaluation_8() ?></td>
            </tr>

        </tbody>

    </table>
</div>










<?php
$content = ob_get_clean();
$title = "FORMAGEST | Module : " . $module->getLabel();
require_once 'views/templates/default.php';
?>