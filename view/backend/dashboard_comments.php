<?php ob_start();?>

<div class='row col-lg-12'>
    <div class='main col-lg-12'>
        <div class='elements_container col-lg-12'>
            <h1 class='all_h1'>Tous les commentaires</h1>

            <?php
            foreach ($comments->fetchAll(PDO::FETCH_CLASS) as $comment) {
                echo '<div class="admin_comments col-lg-12">
                        <div class="header_comment">
                            <i class="far fa-comment fa-2x"></i>
                            <p><span class="author_comment">'.htmlspecialchars($comment->author).'</span>, <br>posté le '.$comment->date_comment.' sur le chapitre <em>'.$comment->title.'</em></p> 
                        </div>                        
                        <p>'.htmlspecialchars($comment->comment).'</p>
                        <div class="options_comments">                 
                            <a href="./index.php?action=confirmDeleteComment&idComment='.$comment->id.'" class="element_options"><i class="fas fa-trash"></i> Supprimer</a>
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