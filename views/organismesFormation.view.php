<?php
ob_start();
?>
<h3>Organismes de formation</h3>
<p class="text-border"><a href="<?= URL ?>organismes-de-formation/create">Ajouter</a></p>

<div class="grid gap-1 mb-1">
    <div class="col-lg-2 col-md-6 col-sm-12">
        <input class="form form-blue" type="text" name="search" id="search">
    </div>
    <div class="col-lg-8 col-md-6 col-sm-12">
        <a class="btn" style="cursor:pointer;" onclick="recherche()">Rechercher</a>
    </div>
    <!-- Recherche enseigne -->
    <script type="text/javascript">
        function recherche() {
            var search = document.getElementById("search").value;
            var url = "<?= URL ?>organismes-de-formation/search/";
            document.location.href = url + search;
        }
    </script>
</div>
<?php if (!empty($ofs)) : ?>
    <div class="table-container rounded">
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
                        <td><a href="<?= URL ?>organismes-de-formation/read/<?= $of->getId() ?>"><?= $of->getNom_Commercial(); ?></a></td>
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

<?php
$content = ob_get_clean();
$title = "FORMAGEST | Organismes de formation";
require_once 'views/templates/default.php';
?>