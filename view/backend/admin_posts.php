<?php ob_start();?>

<div class='menu'>
    <a href='../../projet_4/index.php?action=adminPosts' class='active_menu element_menu'>Chapitres</a>
    <a href='../../projet_4/index.php?action=adminComments' class='element_menu'>Commentaires</a>
</div>

<div class='row'>
    <div class='main col-lg-12'>
        <div class='elements_container col-lg-10'>
            <div class='posts_admin col-lg-12' id='new_chapter_button'>
                <i class="fas fa-plus-circle fa-6x"></i>
                <h4 id='new_chapter_title'>Ecrire un nouveau chapitre</h4>
            </div>

            <?php
            foreach ($posts->fetchAll(PDO::FETCH_CLASS) as $post) {
                echo '<div class="posts_admin col-lg-12">
                        <i class="ion-ios-bookmarks-outline fa-5x" style="color: #323540;"></i>
                        <h4><a class="title" href="./index.php?action=post&id='.$post->id.'&idPost='.$post->id.'">Chapitre '.$post->num.' : '.$post->title.'</a></h4>
                        <div class="options">
                            <a href=>Voir</a>
                            <a href=>Modifier</a>
                            <a href=>Supprimer</a>
                        </div>
                    </div>';
            }
            ?>

        </div>
    </div>
</div>

<?php 
$content = ob_get_clean();
require('template_backend.php');
?>