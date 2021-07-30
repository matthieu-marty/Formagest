<?php
ob_start()
?>

<h3>Salles</h3>

<p class="text-border"><a href="<?= URL ?>back-office">Retour</a> | <a href="<?= URL ?>salles/create">Ajouter</a></p>

<div class="grid gap-1 mb-1">
    <div class="col-lg-2 col-md-6 col-sm-12">
        <input class="form" type="text" name="search" id="search" autocomplete="off">
    </div>
    <div class="col-lg-8 col-md-6 col-sm-12">
        <a class="btn btn-primary-action" onclick="recherche()">Rechercher</a>
    </div>
</div>

<?php if (!empty($salles)) : ?>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Label</th>
                    <th>Modification</th>
                    <th>Création</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($salles as $salle) : ?>
                    <tr>
                        <td><a href="<?= URL ?>salles/read/<?= $salle->getId(); ?>"><?= $salle->getLabel(); ?></a></td>
                        <td><?= $salle->getDate_Modification(); ?></td>
                        <td><?= $salle->getDate_Creation(); ?></td>
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
            var url = "<?= URL ?>salles/search/";
            document.location.href = url + search;
        }
    }
</script>







<?php
$content = ob_get_clean();
$title = "FORMAGEST | Salles";
require_once 'views/templates/default.php';
?>