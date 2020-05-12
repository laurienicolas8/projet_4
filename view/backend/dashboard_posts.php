<?php ob_start();?>

<div class='row col-lg-12'>
    <div class='main col-lg-12'>
        <div class='elements_container col-lg-10'>
            <h1 class='all_h1'>Tous les chapitres</h1>
            <div class='posts_admin col-lg-12' id='new_chapter_button'>
                <i class="fas fa-plus-circle fa-6x"></i>
                <h4><a href='./index.php?action=editPost' id='new_chapter_title'>Ecrire un nouveau chapitre</a></h4>
            </div>

            <?php
            foreach ($posts->fetchAll(PDO::FETCH_CLASS) as $post) {
                echo '<div class="posts_admin col-lg-12">
                        <i class="ion-ios-bookmarks-outline fa-5x" style="color: #80d1c0;"></i>
                        <h4><a class="title" href="./index.php?action=infoPost&idPost='.$post->id.'">Chapitre '.$post->num.' : '.$post->title.'</a></h4>
                        <div class="options">
                            <a href="./index.php?action=infoPost&id='.$post->id.'&idPost='.$post->id.'" class="element_options"><i class="far fa-eye"></i> Afficher</a>
                            <a href="./index.php?action=accessModifPost&idPost='.$post->id.'" class="element_options"><i class="fas fa-pen"></i> Modifier</a>
                            <a href="./index.php?action=confirmDelete&idPost='.$post->id.'" class="element_options"><i class="fas fa-trash"></i> Supprimer</a>
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