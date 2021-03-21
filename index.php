<?php include_once "toolKit.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- icon -->
  <link rel="shortcut icon" href="icon/favicon.png" type="image/x-icon">
  <!-- bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&family=Kanit:wght@500&display=swap" rel="stylesheet">
  <!-- fontawesome -->
  <script src="https://kit.fontawesome.com/518f89d214.js" crossorigin="anonymous"></script>
  <!-- slick -->
  <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
  <!-- css -->
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/home.css">
  <!-- title -->
  <title>Fashion Online Store</title>
</head>
<body>
<section id="Navbar">
  <div class="navbar container-fluid d-flex justify-content-between align-items-center ps-4 pe-4">
    <div class="home d-flex align-items-center col-12 col-md-2">
      <a href="?page=home">
        <img src="icon/Massimo-Dutti-Logo.png" title="首頁">
      </a>
    </div>

    <div class="gender d-none d-md-flex justify-content-center align-items-center col-2">
      <div class="men m-3">
        <a href="?gender=men" title="男士">MEN</a>
      </div>

      <div class="women m-3">
        <a href="?gender=women" title="女士">WOMEN</a>
      </div>
    </div>

    <div class="control d-flex align-items-center col-12 col-md-2">
      <div class="bars d-block d-md-none ms-3 me-3">
        <a href="" title="主選單"><i class="fas fa-bars m-0 h3"></i></a>
      </div>

      <div class="favorites d-none d-md-block ms-3 me-3">
        <a href="?page=shoppingCart" title="收藏清單"><i class="fas fa-heart m-0 h4"></i></a>
      </div>

      <div class="shoppingCart ms-3 me-3">
        <a href="?page=shoppingCart" title="購物清單"><i class="fas fa-shopping-cart m-0 h4"></i></a>
      </div>

      <div class="user ms-3 me-3"><a href="?page=userLogin">
        <i class="fas fa-user m-0 h4"></i></a>
      </div>
    </div>
  </div>

  <div class="sort container-fluid d-none d-md-flex justify-content-center align-items-center ps-4 pe-4">
    <div class="newIn m-2 me-4"><a href="?mainSort=newIn" class="text-dark">NEW IN</a></div>

    <div class="collection m-2 me-4"><a href="?mainSort=collection" class="text-dark">COLLECTION</a></div>

    <div class="shoes m-2 me-4"><a href="?mainSort=shoes" class="text-dark">SHOES</a></div>

    <div class="specialPrices m-2 me-4"><a href="?mainSort=specialPrices" class="text-danger">SPECIAL PRICES</a></div>

    <div class="joinLife m-2 me-4"><a href="?mainSort=joinLife" class="text-dark">JOIN LIFE</a></div>
  </div>
</section>

<section id="Content">
<?php loadPages("front"); ?>
</section>

<section id="javaScript">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/js.js"></script>
</section>
</body>
</html>