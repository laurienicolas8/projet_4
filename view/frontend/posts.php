<?php ob_start();?>

<section id="services" class="section-bg posts">
    <div class="container">
        <header class="section-header">
            <h3>Tous les chapitres</h3>
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

            <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                <div class="box">
                    <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #3fcdc7;"></i></div>
                    <h4 class="title"><a href="singlePost.php">Chapitre 5 : Sed ut perspiciatis</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                <div class="box">
                    <div class="icon"><i class="ion-ios-bookmarks-outline" style="color:#41cf2e;"></i></div>
                    <h4 class="title"><a href="singlePost.php">Chapitre 6 : Magni Dolores</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                <div class="box">
                    <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #3fcdc7;"></i></div>
                    <h4 class="title"><a href="singlePost.php">Chapitre 7 : Sed ut perspiciatis</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                <div class="box">
                    <div class="icon"><i class="ion-ios-bookmarks-outline" style="color:#41cf2e;"></i></div>
                    <h4 class="title"><a href="singlePost.php">Chapitre 8 : Magni Dolores</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                <div class="box">
                    <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #3fcdc7;"></i></div>
                    <h4 class="title"><a href="singlePost.php">Chapitre 9 : Sed ut perspiciatis</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                <div class="box">
                    <div class="icon"><i class="ion-ios-bookmarks-outline" style="color:#41cf2e;"></i></div>
                    <h4 class="title"><a href="singlePost.php">Chapitre 10 : Magni Dolores</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
$content = ob_get_clean();
require('template.php');
?>