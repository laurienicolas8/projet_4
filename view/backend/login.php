<?php ob_start();?>

<form action='' class='form_login'>
    <h1 class='h1_login'>Connectez-vous</h1>
    <label class='label_login'>Identifiant :</label><input name ='id_login' type='text'> 
    <label class='label_login'>Mot de passe :</label><input name ='password_login' type='text'> 
    <input type='submit' value='Connexion' class='button_login'>
</form>

<?php 
$content = ob_get_clean();
require('template.php');
?>