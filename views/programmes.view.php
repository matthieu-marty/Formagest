<?php
ob_start();
?>
<h3>Programmes de formation</h3>
<a href="<?= URL ?>back-office"><span class="iconify action-icon action-icon-primary" data-icon="fluent:backspace-24-regular" data-inline="false"></span></a>
<a href="<?= URL ?>test"><span class="iconify action-icon action-icon-primary" data-icon="fluent:add-16-filled" data-inline="false"></span></a>

<div class="grid gap-1 mb-1">
    <div class="col-lg-2 col-md-6 col-sm-12">
        <input class="form" type="text" name="search" id="search" autocomplete="off">
    </div>
    <div class="col-lg-8 col-md-6 col-sm-12">
        <a class="btn btn-primary-action" onclick="recherche()">Rechercher</a>
    </div>
</div>

<?php if (!empty($programmes)) : ?>
    <div class="table-container-md striped">
        <table>
            <thead>
                <tr>
                    <th>Programme</th>
                    <th>Catégorie</th>
                    <th>Thème</th>
                    <th>Création</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($programmes as $programme) : ?>
                    <tr>
                        <td><a href="<?= URL ?>programmes/read/<?= $programme->getId(); ?>"><?= $programme->getLabel(); ?></a></td>
                        <td>[Catégorie]</td>
                        <td>[THEME]</td>
                        <td><?= $programme->getDate_Creation(); ?></td>
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
            var url = "<?= URL ?>programmes/search/";
            document.location.href = url + search;
        }
    }
</script>
<?php
$content = ob_get_clean();
$title = "FORMAGEST | Programmes  de formation";
require_once 'views/templates/default.php';
?>