<?php
ob_start()
?>

<h3>OPCAs</h3>

<a href="<?= URL ?>back-office"><span class="iconify action-icon action-icon-primary" data-icon="fluent:backspace-24-regular" data-inline="false"></span></a>
<a href="<?= URL ?>opcas/create"><span class="iconify action-icon action-icon-primary" data-icon="fluent:add-16-filled" data-inline="false"></span></a>

<div class="grid gap-1 mb-1">
    <div class="col-lg-2 col-md-6 col-sm-12">
        <input class="form" type="text" name="search" id="search" autocomplete="off">
    </div>
    <div class="col-lg-8 col-md-6 col-sm-12">
        <a class="btn btn-primary-action" onclick="recherche()">Rechercher</a>
    </div>
</div>

<?php if (!empty($opcas)) : ?>
    <div class="table-container-md">
        <table>
            <thead>
                <tr>
                    <th>Label</th>
                    <th>Adresse</th>
                    <th>Code postal</th>
                    <th>Ville</th>
                    <th>Modification</th>
                    <th>Création</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($opcas as $opca) : ?>
                    <tr>
                        <td><a href="<?= URL ?>opcas/read/<?= $opca->getId(); ?>"><?= $opca->getNom(); ?></a></td>
                        <td><?= $opca->getAdresse(); ?></td>
                        <td><?= $opca->getCode_Postal(); ?></td>
                        <td><?= $opca->getVille(); ?></td>
                        <td><?= $opca->getDate_Modification(); ?></td>
                        <td><?= $opca->getDate_Creation(); ?></td>
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
            var url = "<?= URL ?>opcas/search/";
            document.location.href = url + search;
        }
    }
</script>







<?php
$content = ob_get_clean();
$title = "FORMAGEST | OPCAs";
require_once 'views/templates/default.php';
?>