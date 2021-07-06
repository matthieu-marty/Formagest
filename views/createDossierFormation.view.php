<?php
ob_start()
?>

<h3 class="mb-2">Créer un dossier de formation</h3>


<h5>Sélectionnez un stagiaire</h5>
<div class="grid gap-1 mb-1">
    <div class="col-lg-2 col-md-6 col-sm-12">
        <input class="form" type="text" name="search" id="search" autocomplete="off">
    </div>
    <div class="col-lg-8 col-md-6 col-sm-12">
        <a class="btn btn-primary-action" onclick="recherche()">Rechercher</a>
    </div>
</div>



<?php if (!empty($effectifs)) : ?>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Fonction</th>
                    <th>Entreprise</th>
                    <th>Telephone</th>
                    <th>Mail</th>
                    <th>Modification</th>
                    <th>Création</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($effectifs as $effectif) : ?>
                    <tr>
                        <td><a href="<?= URL ?>dossier-formation-individuelle/create/<?= $effectif->getId(); ?>"><?= $effectif->getPrenom() . ' ' . $effectif->getNom(); ?></a></td>
                        <td><?= $effectif->getFonction(); ?></td>
                        <td>
                            <?php
                            $entreprise = $entreprise_manager->getEntrepriseById($effectif->getId_Entreprise());
                            echo ($entreprise->getEnseigne());
                            ?>
                        </td>
                        <td><?= $effectif->getTelephone(); ?></td>
                        <td><?= $effectif->getMail(); ?></td>
                        <td><?= $effectif->getDate_Maj(); ?></td>
                        <td><?= $effectif->getDate_Creation(); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
<?php else : ?>
    <p class="p-2 text-grey border-dashed text-center text-bold">Aucun résultats</p>
    </div>
<?php endif; ?>





<script type="text/javascript">
    function recherche() {
        var search = document.getElementById("search").value;
        if (search !== null) {
            var url = "<?= URL ?>dossier-de-formation/search/";
            document.location.href = url + search;
        }
    }
</script>
<?php
$content = ob_get_clean();
$title = "FORMAGEST | Créer un dossier de formation";
require_once 'views/templates/default.php';
?>