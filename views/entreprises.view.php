<?php
ob_start();
?>
<h3> Entreprises</h3>
<p class="text-border"><a href="<?= URL ?>back-office">Retour</a> | <a href="<?= URL ?>entreprises/create">Ajouter</a></p>

<div class="grid gap-1 mb-1">
    <div class="col-lg-2 col-md-6 col-sm-12">
        <input class="form" type="text" name="search" id="search" autocomplete="off">
    </div>
    <div class="col-lg-8 col-md-6 col-sm-12">
        <a class="btn btn-primary-action" onclick="recherche()">Rechercher</a>
    </div>
</div>

<?php if (!empty($entreprises)) : ?>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Enseigne</th>
                    <th>Activité</th>
                    <th>Ville</th>
                    <th>Adresse</th>
                    <th>Code Postal</th>
                    <th>Modification</th>
                    <th>Création</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($entreprises as $entreprise) : ?>
                    <tr>
                        <td><a href="<?= URL ?>entreprises/read/<?= $entreprise->getId(); ?>"><?= $entreprise->getEnseigne(); ?></a></td>
                        <td><?= $entreprise->getActivite(); ?></td>
                        <td><?= $entreprise->getVille(); ?></td>
                        <td><?= $entreprise->getAdresse(); ?></td>
                        <td><?= $entreprise->getCode_Postal(); ?></td>
                        <td><?= $entreprise->getDate_Maj(); ?></td>
                        <td><?= $entreprise->getDate_Creation(); ?></td>
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
        if (search !== null) {
            var url = "<?= URL ?>entreprises/search/";
            document.location.href = url + search;
        }
    }
</script>
<?php
$content = ob_get_clean();
$title = "FORMAGEST | Entreprises";
require_once 'views/templates/default.php';
?>