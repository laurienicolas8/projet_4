<?php ob_start();?>

<section id='chapters' class="posts">
    <div class="container">
        <header class="posts_header">
            <h3 class='confirm_title'> 
                <?php while ($comment = $oneComment->fetch()) { 
                    echo '<h1 class="title_confirm">Etes-vous sûr de vouloir signaler le commentaire de '.htmlspecialchars($comment->author).' ?</h1>
                        <div class="confirm_buttons">
                            <a href="./index.php?action=reportComment&idComment='.$comment->id.'" class="option_button delete_button">Signaler</a>
                            <a href="./index.php?action=singlePost&idPost='.$comment->idPost.'" class="option_button cancel_button">Annuler</a>
                        </div>';        
                } ?>
            </h3>
        </header>
    </div>
</section>


<?php 
$content = ob_get_clean();
require('template_frontend.php');
?>