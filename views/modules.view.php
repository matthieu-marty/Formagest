<?php
ob_start();
?>
<h3> Modules</h3>
<a href="<?= URL ?>back-office"><span class="iconify action-icon action-icon-primary" data-icon="fluent:backspace-24-regular" data-inline="false"></span></a>
<a href="<?= URL ?>modules/create"><span class="iconify action-icon action-icon-primary" data-icon="fluent:add-16-filled" data-inline="false"></span></a>

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
                    <th>Module</th>
                    <th>O.P. 1</th>
                    <th>O.P. 2</th>
                    <th>O.P. 3</th>
                    <th>O.P. 4</th>
                    <th>Catégorie</th>
                    <th>Création</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($modules as $module) : ?>
                    <tr>
                        <td><a href="<?= URL ?>modules/read/<?= $module->getId(); ?>"><?= $module->getLabel(); ?></a></td>
                        <td><?= $module->getObjectif_Pedagogique_1(); ?></td>
                        <td><?= $module->getObjectif_Pedagogique_2(); ?></td>
                        <td><?= $module->getObjectif_pedagogique_3(); ?></td>
                        <td><?= $module->getObjectif_Pedagogique_4(); ?></td>
                        <td>[ Catégorie ]</td>
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