<?php ob_start();?>

<div class='row col-lg-12'>
    <div class='main col-lg-12'>
        <div class='info_container col-lg-10'>
            <a href='./index.php?action=dashboardComments' class='go_back'><i class="fas fa-arrow-left fa-2x"></i></a>
            
            <div class='button_container'>

                <?php while ($comment = $oneComment->fetch()) { 
                echo '<a href="./index.php?action=confirmDeleteComment&idComment='.$comment->id.'" class="delete_button option_button"><i class="fas fa-trash"></i> Supprimer ce commentaire</a>';
                ?>
            </div>
            
            <div class='infos_and_labels'>
                <p class='label'>Commentaire n° :</p>
                <p class='info'><?= $comment->id ?></p>
            </div>

            <div class='infos_and_labels'>
                <p class='label'>Auteur :</p>
                <p class='info'><?= htmlspecialchars($comment->author) ?></p>
            </div>

            <div class='infos_and_labels'>
                <p class='label'>Posté le :</p>
                <p class='info'><?= $comment->date_comment ?></p>
            </div>

            <div class='infos_and_labels'>
                <p class='label'>Commentaire :</p>
                <p class='info'><?= htmlspecialchars($comment->comment) ?></p>
            </div>
        </div>
        
    </div>
</div>

<?php 
                }
$content = ob_get_clean();
require('template_backend.php');
?>