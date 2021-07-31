<?php
ob_start()
?>

<h3>Modules</h3>

<p class="text-border"><a href="<?= URL ?>back-office">Retour</a> | <a href="<?= URL ?>modules/create">Ajouter</a></p>

<div class="grid gap-1 mb-1">
    <div class="col-lg-2 col-md-6 col-sm-12">
        <input class="form" type="text" name="search" id="search" autocomplete="off">
    </div>
    <div class="col-lg-8 col-md-6 col-sm-12">
        <a class="btn btn-primary-action" onclick="recherche()">Rechercher</a>
    </div>
</div>

<?php if (!empty($modules)) : ?>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Label</th>
                    <th>Objectif pedagogique</th>
                    <th>Modification</th>
                    <th>Création</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($modules as $module) : ?>
                    <tr>
                        <td><a href="<?= URL ?>modules/read/<?= $module->getId(); ?>"><?= $module->getLabel(); ?></a></td>
                        <td><?= $module->getObjectif_Pedagogique() ?></td>
                        <td><?= $module->getDate_Modification(); ?></td>
                        <td><?= $module->getDate_Creation(); ?></td>
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
            var url = "<?= URL ?>modules/search/";
            document.location.href = url + search;
        }
    }
</script>







<?php
$content = ob_get_clean();
$title = "FORMAGEST | Modules";
require_once 'views/templates/default.php';
?>