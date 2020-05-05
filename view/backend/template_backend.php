<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <title>Jean Forteroche - Administration</title>
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
            <link href="./public/css/style_backend.css" rel="stylesheet">
    </head>

    <body>

    <header>
        <p class='hello'>Bonjour, Jean</p>
        <h1><i class="fas fa-book-open fa-2x"></i></h1>
        <a class='back_to_blog deconnection' href='./index.php'>Retour au blog</a>
    </header>

    <div class='menu'>
        <a href='../../projet_4/index.php?action=adminPosts' class='active_menu element_menu'>Chapitres</a><br>
        <a href='../../projet_4/index.php?action=adminComments' class='element_menu'>Commentaires</a>
    </div>

    <?php echo $content ?>

    </body>
</html>