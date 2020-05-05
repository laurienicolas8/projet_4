<?php ob_start();?>


<section id="intro" class="clearfix">
    <div class="container">
        <div class="intro-img">
            <img src='./public/images/testimonial-4.png' alt="Fond intro" class="img-fluid"/>
        </div>

        <div class="intro-info">
            <h2>"<i> Billet simple pour l'Alaska </i>"<br><br><span>Bonjour à toutes et à tous, et bienvenue sur mon blog. Je partage avec vous mon dernier roman en date, <i>Billet simple pour l'Alaska</i>. Vous le trouverez sous forme de chapitres, d'épisodes et je vous invite à me donner votre avis dans les commentaires ! Enjoy !
            </span><br></h2>
            <div>
                <a href="#services" class="btn-get-started">Commencer</a>
            </div>
        </div>
    </div>
</section>

<section id="services" class="section-bg">
    <div class="container">
        <header class="section-header">
            <h3>Commencer l'aventure</h3>
        </header>

        <div class="row col-lg-12">
            <?php
            foreach ($posts->fetchAll(PDO::FETCH_CLASS) as $post) {
                if ($post->num < 5) {
                echo '<div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #80d1c0;"></i></div>
                            <h4 class="title"><a href="./index.php?action=post&id='.$post->id.'&idPost='.$post->id.'">Chapitre '.$post->num.' : '.$post->title.'</a></h4>
                            <p class="description">'.$post->excerpt.'</p>
                        </div>
                    </div>';
                }
            }
            ?>
            <a href='./index.php?action=listPosts' class='all_chapters'>Voir tous les chapitres</a>
        </div>
    </div>
</section>

<?php 
$content = ob_get_clean();
require('template.php');
?>