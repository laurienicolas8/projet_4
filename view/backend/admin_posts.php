<?php ob_start();?>

<div class='menu'>
    <a href='admin_posts.php' class='active_menu'>Chapitres</a>
    <a href='admin_comments.php'>Commentaires</a>
</div>

<div class='main'>
    
</div>

<?php 
$content = ob_get_clean();
require('template.php');
?>