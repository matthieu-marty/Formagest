<?php
ob_start()
?>

<h3 class="mb-2">Accueil</h3>









<?php
$content = ob_get_clean();
$title = "FORMAGEST | Accueil";
$date = getDate();
require_once 'views/templates/default.php';
?>