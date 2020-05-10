<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <title>Jean Forteroche - Blog d'écriture</title>
            <meta content="" name="descriptison">
            <meta content="" name="keywords">

            <!-- Icons -->
            <link href="./public/images/favicon.png" rel="icon">
            <link href="./public/images/apple-touch-icon.png" rel="apple-touch-icon">
            <script src="https://kit.fontawesome.com/a7057ee266.js"></script>

            <!-- Google Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">

            <!-- Vendor CSS Files -->
            <link href="./public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="./public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
            <link href="./public/vendor/animate.css/animate.min.css" rel="stylesheet">
            <link href="./public/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
            <link href="./public/vendor/venobox/venobox.css" rel="stylesheet">

            <!-- Template Main CSS File -->
            <link href="./public/css/style_frontend.css" rel="stylesheet">
      </head>

      <body>

      <!-- HEADER -->
      <header id="header" class="fixed-top">
            <div class="container">
                  <div class="logo float-left">
                        <h1 class="text-light"><a href="#header"><span>Jean Forteroche</span></a></h1>
                  </div>

                  <nav class="main-nav float-right d-none d-lg-block">
                        <ul>
                        <li class="active"><a href="./index.php">Accueil</a></li>
                        <li><a href="./index.php?action=listPosts">Chapitres</a></li>
                        <li><a class='admin_button' href="./index.php?action=login">Connexion administrateur</a></li>
                        </ul>
                  </nav>
            </div>
      </header>

      <!-- BODY -->
      <?php echo $content ?>

      <!-- FOOTER -->
      <section id="testimonials" class="section-bg">
            <div class="container">
                  <header class="section-header">
                        <h3>A propos de moi</h3>
                  </header>

                  <div class="row justify-content-center">
                        <div class="col-lg-8">
                        <div class="testimonial-item">
                              <img src="./public/images/testimonial-3.jpg" class="testimonial-img" alt="Photo de l'auteur"/>
                              <h3>Jean Forteroche</h3>
                              <h4>Ecrivain</h4>
                              <p>"J'écris des romans depuis maintenant plus de 35 ans. J'ai décidé de créer un blog pour avoir plus facilement les retours de mes lecteurs, j'aimerais savoir ce qu'ils pensent de mes histoires. J'espère qu'ils savoureront ce web-bouquin comme un vrai !"</p>
                        </div>
                        </div>
                  </div>
            </div>
            </section>

            <footer id="footer">
            <div class="footer-top">
                  <div class="container">
                        <div class="row footer">
                              <div class="col-lg-4 col-md-6 footer-info">
                                    <h3>Jean Forteroche</h3>
                                    <p>Auteur de "La Longue Nuit" et "Arme au poing", Jean Forteroche partage aujourd'hui son nouveau roman "Billet simple pour l'Alaska" déjà best-seller en France. </p>
                              </div>

                              <div class="col-lg-3 col-md-6 footer-contact">
                                    <h4>Me contacter</h4>
                                    <p>A108 Adam Street <br>
                                    New York, NY 535022<br>
                                    United States <br>
                                    <strong>Téléphone:</strong> 06.48.36.25.48<br>
                                    <strong>Email:</strong> info@example.com<br></p>

                                    <div class="social-links">
                                          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            </footer>

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

            <!-- Vendor JS Files -->
            <script src="assets/vendor/jquery/jquery.min.js"></script>
            <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
            <script src="assets/vendor/php-email-form/validate.js"></script>
            <script src="assets/vendor/counterup/counterup.min.js"></script>
            <script src="assets/vendor/mobile-nav/mobile-nav.js"></script>
            <script src="assets/vendor/wow/wow.min.js"></script>
            <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
            <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
            <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
            <script src="assets/vendor/venobox/venobox.min.js"></script>

            <!-- Template Main JS File -->
            <script src="assets/js/main.js"></script>

    </body>
</html>