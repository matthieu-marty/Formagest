<?php
ob_start()
?>

<h3>Titre</h3>









<?php
$content = ob_get_clean();
$title = "FORMAGEST | Titre";
require_once 'views/templates/default.php';
?>