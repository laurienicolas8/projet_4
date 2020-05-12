<?php ob_start();?>

<div class='row col-lg-12'>
    <div class='main col-lg-12'>
        <div class='elements_container col-lg-10'>
            <h1 class='all_h1'>Commentaires signalés</h1>

            <?php
            foreach ($reportedComments->fetchAll(PDO::FETCH_CLASS) as $comment) {
                echo '<div class="admin_comments col-lg-11">
                        <div class="header_comment">
                            <i class="far fa-comment fa-2x" style="color: #DB001A;"></i>
                            <p><span class="author_comment">'.$comment->author.'</span>, posté le '.$comment->creationDate.'</p>
                        </div>                        
                        <p>'.$comment->comment.'</p>
                        <div class="options_comments">
                            <a href="" class="element_options"><i class="far fa-eye"></i> Afficher</a>
                            <a href="" class="element_options"><i class="far fa-bell"></i> Signaler</a>
                            <a href="" class="element_options"><i class="fas fa-trash"></i> Supprimer</a>
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