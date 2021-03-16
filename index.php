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
  <!-- css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- title -->
  <title>Fashion Online Store</title>
</head>
<body>
<section id="Navbar">
  <div class="navbar container-fluid d-flex align-items-center bg-dark ps-4" style="height:7.5vh;">
    <a href="index.php">
    <img src="icon/Massimo-Dutti-Logo.png" title="Home" style="width:220px;">
    </a>
  </div>
</section>

<section id="Content">
<?php
  $page=(!empty($_GET["page"]))?$_GET["page"]:"main";

  $pageFile="front/".$page.".php";

  if(file_exists($pageFile))
  {
    include $pageFile;
    exit("");
  }
  else
  {
    include "front/main.php";
  }
  ?>
</section>

<section id="javaScript">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/js.js"></script>
</section>
</body>
</html>