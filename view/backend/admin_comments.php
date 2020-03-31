<?php ob_start();?>

<div class='menu'>
    <a href='admin_posts.php'>Chapitres</a>
    <a href='admin_comments.php' class='active_menu'>Commentaires</a>
</div>

<div class='main'>

</div>

<?php 
$content = ob_get_clean();
require('template.php');
?>