<?php ob_start();?>

<section id='chapters' class="posts">
    <div class="container">
        <header class="posts_header">
            <h3 class='confirm_title'> 
                <?php while ($comment = $oneComment->fetch()) { 
                    echo '<h1 class="title_confirm">Le commentaire a bien été signalé.</h1>
                    <div class="confirm_buttons"><a href="./index.php?action=singlePost&idPost='.$comment->idPost.'" class="return_to_posts">Retour au chapitre</a></div>';
                }?>
            </h3> 
        </header>  
    </div>
</section>


<?php 
$content = ob_get_clean();
require('template_frontend.php');
?>