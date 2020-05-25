<?php ob_start();?>

<div class='row col-lg-12'>
    <div class='main col-lg-12'>
        <div class='confirm_container col-lg-9'>
            <?php while ($comment = $oneComment->fetch()) { 
                echo '<h1 class="title_confirm">Etes-vous sûr de vouloir ignorer le commentaire signalé de '.htmlspecialchars($comment->author).' ?</h1>
                    <div class="confirm_buttons">
                        <a href="./index.php?action=ignoreReport&idComment='.$comment->id.'" class="option_button delete_button">Supprimer</a>
                        <a href="./index.php?action=dashboardComments" class="option_button cancel_button">Annuler</a>
                    </div>';        
            } ?>
        </div>
    </div>
</div>

<?php 
$content = ob_get_clean();
require('template_backend.php');
?>