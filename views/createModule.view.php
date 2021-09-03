<?php
ob_start()
?>

<h3>Créeer un module un module</h3>










<?php
$content = ob_get_clean();
$title = "FORMAGEST | Créer un module";
require_once 'views/templates/default.php';
?>