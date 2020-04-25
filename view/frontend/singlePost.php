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
                ?> 
            </p>
                
            <h3>Espace commentaires</h3>
            <div class="comments_container col-lg-12">
                <form class='new_comment' method="post" action='./index.php?action=addComment&idPost=<?=$post->id?>'>
                    <label for="author">Pseudo</label><br>
                    <input type="text" id="author" class='input_comment' name="author"><br>
                    <label for="comment">Message</label><br>
                    <textarea id="comment" class='input_comment' name="comment"></textarea><br>
                    <input type="submit" value="Ajouter" id="submit" class='all_chapters' name="submit">
                </form>
                <?php
                }
                while ($comment = $comments->fetch()){
                    echo '<div class="comment">
                            <a href="./index.php?action=reportComment&id='.$comment->id.'&idPost='.$comment->idPost.'" class="report_comment">Signaler ce commentaire</a>
                            <div class="pseudo_container">
                                <i class="fas fa-user-circle fa-2x"></i>
                                <p class="pseudo">'.$comment->author.'</p></div>
                                <p class="comment_content">'.$comment->comment.'</p>
                            </div>';
                }?>
            </div>
        </div>
    </div>
</section>    

<?php
$content = ob_get_clean();
require('template.php');
?>