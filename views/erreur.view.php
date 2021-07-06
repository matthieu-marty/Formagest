<?php
ob_start()
?>
<div class="text-center">
    <img src="https://img.icons8.com/color-glass/100/000000/error.png" class="d-block mx-auto mt-2 card"/>
    <h3 class="text-red">Une erreur est survenue</h3>
    <p class="text-border"><a href="<?= URL ?>accueil">Revenir à l'accueil</a> | <a href="<?= URL ?>rapport">Signaler un bug</a></p>
</div>

<?php
$content = ob_get_clean();
$title = "FORMAGEST | Une erreur est survenue";
require_once 'views/templates/default.php';
?>