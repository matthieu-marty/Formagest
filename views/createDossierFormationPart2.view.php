<?php
session_start();
$_SESSION['id_entreprise'] = $entreprise->getId();
$_SESSION['entreprise'] = $entreprise->getEnseigne();
$_SESSION['id_stagiaire'] = $effectif->getId();
$_SESSION['stagiaire'] = $effectif->getPrenom() . ' ' . $effectif->getNom();

ob_start();
?>
<div class="step-line">
    <div class="step-card-active">
        <span>1</span>
        <p>Stagiaire</p>
        <a href="<?= URL ?>entreprises/read/<?= $_SESSION['id_entreprise'] ?>" class="text-grey"><?= $_SESSION['entreprise'] . ' - ' . $_SESSION['stagiaire'] ?></a>
    </div>
    <div class="step-card-active">
        <span>2</span>
        <p>Organisme</p>
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
        <p>Logistique</p>
    </div>
    <div class="step-card">
        <span>6</span>
        <p>Financement</p>
    </div>
</div>


<h3>Créer un dossier de formation</h3>

<h5>2. Sélectionnez un Organisme de formation</h5>
<div class="grid gap-1 mb-1">
    <div class="col-lg-2 col-md-6 col-sm-12">
        <input class="form form-blue" type="text" name="search" id="search" autocomplete="off">
    </div>
    <div class="col-lg-8 col-md-6 col-sm-12">
        <a class="btn btn-primary-action" style="cursor:pointer;" onclick="recherche()">Rechercher</a>
    </div>

</div>
<?php if (!empty($ofs)) : ?>
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
                <?php foreach ($ofs as $of) : ?>
                    <tr>
                        <td><a href="<?= URL ?>montage-dossier/formateur/<?= $of->getId() ?>"><?= $of->getNom_Commercial(); ?></a></td>
                        <td><?= $of->getDiscipline(); ?></td>
                        <td><?= $of->getVille(); ?></td>
                        <td><?= $of->getAdresse(); ?></td>
                        <td><?= $of->getCode_Postal(); ?></td>
                        <td><?= $of->getDate_Maj(); ?></td>
                        <td><?= $of->getDate_Creation(); ?></td>
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
        var url = "<?= URL ?>montage-dossier/create/1/search/";
        document.location.href = url + search;
    }
</script>
<?php
$content = ob_get_clean();
$title = "FORMAGEST | Montage dossier : Sélection d'un organisme de formation";
require_once 'views/templates/default.php';
?>