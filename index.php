<?php include_once "toolKit.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- icon -->
  <link rel="shortcut icon" href="icon/favicon.png" type="image/x-icon">
  <!-- UIkit CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.19/dist/css/uikit.min.css" />
  <!-- bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&family=Kanit:wght@400&display=swap" rel="stylesheet">
  <!-- fontawesome -->
  <script src="https://kit.fontawesome.com/518f89d214.js" crossorigin="anonymous"></script>
  <!-- slick -->
  <link rel="stylesheet" type="text/css" href="slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
  <!-- animation.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- wow.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous"></script>
  <!-- css -->
  <link rel="stylesheet" href="css/index_navbar.css">
  <link rel="stylesheet" href="css/home_slick.css">
  <link rel="stylesheet" href="css/home_theme.css">
  <link rel="stylesheet" href="css/home_forInspirationCon.css">
  <link rel="stylesheet" href="css/home_itemsRanking.css">
  <link rel="stylesheet" href="css/home_collection.css">
  <link rel="stylesheet" href="css/home_shoes.css">
  <link rel="stylesheet" href="css/home_specialPrices.css">
  <link rel="stylesheet" href="css/index_footer.css">
  <link rel="stylesheet" href="css/goods.css">
  <link rel="stylesheet" href="css/userLogin.css">
  <!-- title -->
  <title>Fashion Online Store</title>
</head>

<body>
  <section id="Navbar">
    <?php include "api/navbar.php"; ?>
  </section>

  <section id="Content">
    <?php include $Front->getLoad() ?>
  </section>

  <section id="Footer">
    <?php include "api/footer.php"; ?>
  </section>

  <section id="javaScript">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.19/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.19/dist/js/uikit-icons.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/newInShow.js"></script>
    <script src="js/forInspiration.js"></script>
    <script src="js/footer.js"></script>
    <script src="js/goods.js"></script>
    <script src="js/register.js"></script>
    <script src="js/signIn.js"></script>
  </section>
</body>

</html>