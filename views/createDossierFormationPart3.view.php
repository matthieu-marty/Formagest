<?php
ob_start()
?>
<div class="step-line">
    <div class="step-card-active">
        <span>1</span>
        <p>Stagiaire</p>
        <a href="<?= URL ?>entreprises/read/<?= $entreprise->getId() ?>" class="text-grey"><?= $entreprise->getEnseigne() . ' - ' . $effectif->getPrenom() . ' ' . $effectif->getNom() ?></a>
    </div>
    <div class="step-card-active">
        <span>2</span>
        <p>Organisme</p>
        <a href="<?= URL ?>organismes-de-formation/read/<?= $of->getId() ?>" class="text-grey"><?= $of->getEnseigne()?></a>

    </div>
    <div class="step-card">
        <span>3</span>
        <p>Formateur</p>
    </div>
    <div class="step-card">
        <span>4</span>
        <p>Programme</p>
    </div>
    <div class="step-card">
        <span>5</span>
        <p>Modalités</p>
    </div>
</div>


<h3>Créer un dossier de formation</h3>

<h5>Sélectionnez un Formateur</h5>
<div class="grid gap-1 mb-1">
    <div class="col-lg-2 col-md-6 col-sm-12">
        <input class="form form-blue" type="text" name="search" id="search" autocomplete="off">
    </div>
    <div class="col-lg-8 col-md-6 col-sm-12">
        <a class="btn btn-primary-action" style="cursor:pointer;" onclick="recherche()">Rechercher</a>
    </div>

</div>
<?php if (!empty($formateurs)) : ?>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Discipline</th>
                    <th>Ville</th>
                    <th>Adresse</th>
                    <th>Code Postal</th>
                    <th>Modification</th>
                    <th>Création</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($formateurs as $formateur) : ?>
                    <tr>
                        <td><a href="<?= URL ?>organismes-de-formation/read/<?= $formateur->getId() ?>"><?= $formateur->getNom_Commercial(); ?></a></td>
                        <td><?= $formateur->getDiscipline(); ?></td>
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
<?php else : ?>
    <p class="p-2 text-grey border-dashed text-center text-bold">Aucun résultats</p>
    </div>
<?php endif; ?>



<!-- Recherche enseigne -->
<script type="text/javascript">
    function recherche() {
        var search = document.getElementById("search").value;
        var url = "<?= URL ?>dossier-formation-individuelle/create/1/search/";
        document.location.href = url + search;
    }
</script>
<?php
$content = ob_get_clean();
$title = "FORMAGEST | Montage dossier : " . $effectif->getPrenom() . ' ' . $effectif->getNom();
require_once 'views/templates/default.php';
?>