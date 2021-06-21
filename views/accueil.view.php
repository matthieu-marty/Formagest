<?php
ob_start()
?>

<h3 class="mb-2">Accueil</h3>

<div class="grid gap-1">
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="bg-white border p-2">
            <h4>Test fiche diagnostic</h4>
            <a href="<?= URL ?>fiche-diagnostic" class="text-bold">Voir fiche diagnostic</a>
        </div>

    </div>

    <div class="col-lg-2 col-md-6 col-sm-6 bg-white p-2 border">
        <p class="text-bold text-blue mb-0">Aujourd'hui</p>
        <p class="text-light text-center mb-0 p-0" style="font-size:3.5rem;">17</p>
        <p class="text-grey text-center mb-0 p-0">juin</p>

    </div>

    <div class="col-lg-2 col-md-6 col-sm-6 bg-white p-2 border">
        <p class="text-bold text-orange mb-0">Test fiche montage</p>
        <p class="text-light mb-0 p-0" style="font-size:3.5rem;">4009</p>
        <a href="<?= URL ?>fiche-montage">lien</a>
    </div>

    <div class="col-lg-2 col-md-6 col-sm-6 bg-blue p-2">
        <p class="text-bold mb-0">Utilisateurs</p>
        <p class="text-light mb-0 p-0" style="font-size:3.5rem;">4009</p>
        <a href="<?= URL ?>fiche-montage">lien</a>
    </div>



</div>


</div>






<?php
$content = ob_get_clean();
$title = "FORMAGEST | Accueil";
$date = getDate();
require_once 'views/templates/default.php';
?>