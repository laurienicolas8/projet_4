<?php ob_start();?>

<section id="intro" class="clearfix">
    <div class="container">
        <div class="intro-img">
            <img src='../../public/images/testimonial-4.png' alt="Fond intro" class="img-fluid"/>
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

        <div class="row">
            <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                <div class="box">
                    <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #ff689b;"></i></div>
                    <h4 class="title"><a href="singlePost.php">Chapitre 1 : Lorem Ipsum</a></h4>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                <div class="box">
                    <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i></div>
                    <h4 class="title"><a href="singlePost.php">Chapitre 2 : Dolor Sitema</a></h4>
                    <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                <div class="box">
                    <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #3fcdc7;"></i></div>
                    <h4 class="title"><a href="singlePost.php">Chapitre 3 : Sed ut perspiciatis</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                <div class="box">
                    <div class="icon"><i class="ion-ios-bookmarks-outline" style="color:#41cf2e;"></i></div>
                    <h4 class="title"><a href="singlePost.php">Chapitre 4 : Magni Dolores</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
            </div>

            <a href='posts.php' class='all_chapters'>Voir tous les chapitres</a>
        </div>
    </div>
</section>

<?php 
$content = ob_get_clean();
require('template.php');
?>