<?php ob_start();?>

<div class='row col-lg-12'>
    <div class='main col-lg-12'>
        <div class='elements_container col-lg-10'>
            <div class='posts_admin col-lg-12' id='new_chapter_button'>
                <i class="fas fa-plus-circle fa-6x"></i>
                <h4 id='new_chapter_title'>Ecrire un nouveau chapitre</h4>
            </div>

            <?php
            foreach ($posts->fetchAll(PDO::FETCH_CLASS) as $post) {
                echo '<div class="posts_admin col-lg-12">
                        <i class="ion-ios-bookmarks-outline fa-5x" style="color: #80d1c0;"></i>
                        <h4><a class="title" href="./index.php?action=adminPost&idPost='.$post->id.'">Chapitre '.$post->num.' : '.$post->title.'</a></h4>
                        <div class="options">
                            <a href="./index.php?action=adminPost&id='.$post->id.'&idPost='.$post->id.'" class="element_options"><i class="far fa-eye"></i> Voir</a>
                            <a href="" class="element_options"><i class="fas fa-pen"></i> Modifier</a>
                            <a href="./index.php?action=deletePost&idPost='.$post->id.'" class="element_options"><i class="fas fa-trash"></i> Supprimer</a>
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