<?php
ob_start()
?>

<h3 class="mb-2">Fiche diagnostic</h3>









<?php
$content = ob_get_clean();
$title = "FORMAGEST | FIche Diagnostic";
require_once 'views/templates/default.php';
?>