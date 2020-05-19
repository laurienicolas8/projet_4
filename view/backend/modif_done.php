<?php ob_start();?>

<div class='row col-lg-12'>
    <div class='main col-lg-12'>
        <div class='elements_container col-lg-12'>
            <div class='modif_done_container'>
                <h1 class='title_confirm'>Chapitre modifié avec succès !</h1>
                <a href='./index.php?action=dashboardPosts' class='return_to_posts'>Retour aux chapitres</a>
            </div>
        </div>
    </div>
</div>
<?php 
$content = ob_get_clean();
require('template_backend.php');
?>