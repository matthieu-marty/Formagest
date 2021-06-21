<?php
ob_start();
?>
<h3>Formateurs</h3>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Ville</th>
                <th>Adresse</th>
                <th>Code Postal</th>
                <th>Dernière modification</th>
                <th>Date création</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($formateurs as $formateur) : ?>
                <tr>
                    <td><a href="#"><?= $formateur->getNom() . ' ' . $formateur->getPrenom(); ?></a></td>
                    <td><?= $formateur->getVille(); ?></td>
                    <td><?= $formateur->getAdresse(); ?></td>
                    <td><?= $formateur->getCode_Postal(); ?></td>
                    <td><?= $formateur->getDate_Maj(); ?></td>
                    <td><?= $formateur->getDate_Creation(); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


<?php
$content = ob_get_clean();
$title = "FORMAGEST | Formateurs";
require_once 'views/templates/default.php';
?>