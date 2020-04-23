<?php ob_start();?>

<section id="services" class="section-bg posts content_container">
    <div class="container">
        <header class="section-header">
            <h3> 
            <?php 
            while ($post = $onePost->fetch()) {
            echo 'Chapitre '.$post->num.' : '.$post->title.''; 
            ?> 
            </h3>
        </header>

        <div class="row">
            <p class="content col-lg-12"> 
            <?php 
            echo $post->content; 
            }
            ?> 
            </p>
                
            <h3>Espace commentaires</h3>
            <div class="comments_container col-lg-12">
            <?php
            while ($comment = $comments->fetch()){
                echo '<div class="comment">
                        <a href="" class="report_comment">Signaler ce commentaire</a>
                        <div class="pseudo_container">
                            <i class="fas fa-user-circle fa-2x"></i>
                            <p class="pseudo">'.$comment->author.'</p></div>
                            <p class="comment_content">'.$comment->comment.'</p>
                        </div>';
            } 
            include('formComment.php');?>
            </div>
        </div>
    </div>
</section>    

<?php
$content = ob_get_clean();
require('template.php');
?>