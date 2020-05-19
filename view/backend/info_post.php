<?php ob_start();?>

<div class='row col-lg-12'>
    <div class='main col-lg-12'>
        <div class='info_container col-lg-12'>
            <a href='./index.php?action=dashboardPosts' class='go_back'><i class="fas fa-arrow-left fa-2x"></i></a>
            
            <div class='button_container'>

                <?php while ($post = $onePost->fetch()) { 
                echo '<a href="./index.php?action=accessModifPost&idPost='.$post->id.'" class="modify_button option_button"><i class="fas fa-pen"></i> Modifier ce chapitre</a>
                <a href="./index.php?action=confirmDeletePost&idPost='.$post->id.'" class="delete_button option_button"><i class="fas fa-trash"></i> Supprimer ce chapitre</a>';
                ?>
            </div>
            
            <div class='infos_and_labels'>
                <p class='label'>Chapitre n° :</p>
                <p class='info'><?= $post->num ?></p>
            </div>

            <div class='infos_and_labels'>
                <p class='label'>Titre :</p>
                <p class='info'><?= $post->title ?></p>
            </div>

            <div class='infos_and_labels'>
                <p class='label'>Créé le :</p>
                <p class='info'><?= $post->date_post ?></p>
            </div>

            <div class='infos_and_labels'>
                <p class='label'>Extrait visible :</p>
                <?=$post->excerpt?>
            </div>

            <div class='infos_and_labels'>
                <p class='label'>Contenu :</p>
                <?=$post->content?>
            </div>
        </div>
        
    </div>
</div>

<?php 
            }
$content = ob_get_clean();
require('template_backend.php');
?>