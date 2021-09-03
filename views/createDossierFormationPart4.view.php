<?php
session_start();
$_SESSION['id_formateur'] = $formateur->getId();
$_SESSION['formateur'] = $formateur->getPrenom() . ' ' . $formateur->getNom();

ob_start()
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
        <a href="<?= URL ?>organismes-de-formation/read/<?= $_SESSION['id_organisme_formation'] ?>" class="text-grey"><?= $_SESSION['organisme_formation'] ?></a>

    </div>
    <div class="step-card-active">
        <span>3</span>
        <p>Formateur</p>
        <a href="<?= URL ?>organismes-de-formation/read/<?= $_SESSION['id_organisme_formation'] ?>" class="text-grey"><?= $_SESSION['formateur'] ?></a>
    </div>
    <div class="step-card-active">
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

<h5>4. Sélectionnez un Programme</h5>
<div class="grid gap-1 mb-1">
    <div class="col-lg-2 col-md-6 col-sm-12">
        <input class="form form-blue" type="text" name="search" id="search" autocomplete="off">
    </div>
    <div class="col-lg-8 col-md-6 col-sm-12">
        <a class="btn btn-primary-action" style="cursor:pointer;" onclick="recherche()">Rechercher</a>
    </div>

</div>

<?php if (!empty($programmes)) : ?>
    <div class="table-container-md">
        <table>
            <thead>
                <tr>
                    <th>Ref</th>
                    <th>Label</th>
                    <th>Contenu</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($programmes as $programme) : ?>
                    <tr>
                        <td><a href="<?= URL ?>montage-dossier/logistique/<?= $programme->getId() ?>"><?= $programme->getReference() ?></a></td>
                        <td><?= $programme->getLabel() ?></td>
                        <td><?= $programme->getContenu() ?></td>
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
$title = "FORMAGEST | Montage dossier : Sélection d'un Programme";
require_once 'views/templates/default.php';
?>