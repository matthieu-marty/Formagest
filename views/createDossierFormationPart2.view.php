<?php
ob_start()
?>

<h3 class="mb-2">Créer un dossier de formation</h3>









<?php
$content = ob_get_clean();
$title = "FORMAGEST | Montage dossier : " . $effectif->getPrenom() . ' ' . $effectif->getNom();
require_once 'views/templates/default.php';
?>