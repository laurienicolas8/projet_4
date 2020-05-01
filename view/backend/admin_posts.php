<?php ob_start();?>

<div class='menu'>
    <a href='../../projet_4/index.php?action=adminPosts' class='active_menu'>Chapitres</a>
    <a href='../../projet_4/index.php?action=adminComments'>Commentaires</a>
</div>

<div class='main'>
    
</div>

<?php 
$content = ob_get_clean();
require('template_backend.php');
?>