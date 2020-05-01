<?php ob_start();?>

<div class='menu'>
    <a href='../../projet_4/index.php?action=adminPosts'>Chapitres</a>
    <a href='../../projet_4/index.php?action=adminComments' class='active_menu'>Commentaires</a>
</div>

<div class='main'>
    
</div>

<?php 
$content = ob_get_clean();
require('template_backend.php');
?>