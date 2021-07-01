<?php
ob_start()
?>

<h3 class="mb-2">Dossiers de formation</h3>

<p class="text-border"><a href="<?= URL ?>entreprises/create">Montage</a></p>

<div class="grid gap-1 mb-1">
    <div class="col-lg-2 col-md-6 col-sm-12">
        <input class="form" type="text" name="search" id="search" autocomplete="off">
    </div>
    <div class="col-lg-8 col-md-6 col-sm-12">
        <a class="btn btn-primary-action" onclick="recherche()">Rechercher</a>
    </div>
</div>
<!-- ?php if (!empty($entreprises)) : ?> -->
<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>Stagiaire</th>
                <th>Entreprise</th>
                <th>Programme</th>
                <th>Date début</th>
                <th>Date fin</th>
                <th>Organisme</th>
                <th>Date modificcation</th>
                <th>Date création</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <td>Stagiaire</td>
                <td>Entreprise</td>
                <td>Programme></td>
                <td>00-00-0000</td>
                <td>00-00-0000</td>
                <td>OF</td>
                <td>00-00-0000</td>
                <td>00-00-0000</td>
            </tr>

        </tbody>

    </table>
</div>
<!-- ?php else : ?> -->
<!-- <p class="p-2 text-grey border-dashed text-center text-bold">Aucun résultats</p> -->
<!-- ?php endif; ?> -->


<!-- Recherche enseigne -->
<script type="text/javascript">
    function recherche() {
        var search = document.getElementById("search").value;
        if (search !== null) {
            var url = "<?= URL ?>dossiers-de-formation/search/";
            document.location.href = url + search;
        }
    }
</script>








<?php
$content = ob_get_clean();
$title = "FORMAGEST | Dossiers de formation";
$date = getDate();
require_once 'views/templates/default.php';
?>