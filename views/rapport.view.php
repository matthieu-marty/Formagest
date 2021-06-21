<?php
ob_start()
?>

<h3>Signaler un bug</h3>

<div class="bg-white border p-2 grid gap-1">
    <div class="col-lg-3 col-md-6 col-sm-12">
        <label for="nom">Mail</label>
        <input class="form form-blue" type="text" name="enseigne" id="nom">
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12">
        <label for="prenom">Page(s) concernée(s)</label>
        <input class="form form-blue" type="text" name="Prenom" id="Prenom">
    </div>
    <div class="col-12">
        <textarea class="form form-blue" rows="10" name="Prenom" id="Prenom">Décrivez ici le problème rencontré...</textarea>
    </div>
    <div class="col-12 text-right border-top">
        <a href="#" class="btn mt-1">Envoyer un ticket</a>
    </div>


</div>


<?php
$content = ob_get_clean();
$title = "FORMAGEST | Signaler un bug";
require_once 'views/templates/default.php';
?>