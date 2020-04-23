<?php ob_start();?>


<section id="intro" class="clearfix">
    <div class="container">
        <div class="intro-img">
            <img src='./public/images/testimonial-4.png' alt="Fond intro" class="img-fluid"/>
        </div>

        <div class="intro-info">
            <h2>Bienvenue.<br><span>Lorem ipsum dolor sit amet consectetur, adipisicing 
            elit. Nisi quo culpa praesentium quis alias saepe quae fugiat dicta labore 
            odio ratione, veniam, hic voluptas facere tempora eos nemo omnis quaerat!
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
            <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
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