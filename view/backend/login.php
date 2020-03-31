<?php ob_start();?>

<form class='form_login'>
    <h1 class='h1_login'>Connectez-vous</h1>
    <label class='label_login'>Identifiant :</label><input type='text'> 
    <label class='label_login'>Mot de passe :</label><input type='text'> 
    <button class='button_login'>Connexion</button>
</form>

<?php 
$content = ob_get_clean();
require('template.php');
?>