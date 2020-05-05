<?php ob_start();?>

<div class='main'>
    
</div>

<?php 
$content = ob_get_clean();
require('template_backend.php');
?>