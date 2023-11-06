<?php ob_start() ?>


<?php
$content = ob_get_clean();
$titre = "Ma page d'accueil";
require "template.php";
?>