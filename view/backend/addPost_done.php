<?php ob_start();?>

<h1>Votre article a été créé</h1>


<?php 
$content = ob_get_clean();
require('template_backend.php');
?>