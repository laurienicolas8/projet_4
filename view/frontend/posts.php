<?php ob_start();?>

<section id="services" class="section-bg posts">
    <div class="container">
        <header class="section-header">
            <h3>Tous les chapitres</h3>
        </header>

        <div class="row col-lg-12">
            <?php
            foreach ($posts->fetchAll(PDO::FETCH_CLASS) as $post) {
                echo '<div class="col-md-6 col-lg-12 posts wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #80d1c0;"></i></div>
                            <h4 class="title"><a href="./index.php?action=post&id='.$post->id.'&idPost='.$post->id.'">Chapitre '.$post->num.' : '.$post->title.'</a></h4>
                            <p class="description">'.$post->excerpt.'</p>
                        </div>
                    </div>';
            }
            ?>
        </div>
    </div>
</section>

<?php 
$content = ob_get_clean();
require('template.php');
?>