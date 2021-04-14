<div class="slick mb-5">
  <div class="banner">
    <img src="img/newIn.jpg">
    <div class="article">NEW IN</div>
    <a href="<?= $NewIn->getMainUrl() ?>">
      <div class="button d-flex justify-content-center align-items-center">
        <div class="shopNow d-flex justify-content-center align-items-center">SHOP NOW</div>&ensp;
        <i class="arrowR fas fa-arrow-right h4 m-0 animate__animated animate__infinite"></i>
      </div>
    </a>
  </div>
  <div class="video">
    <video autoplay loop muted src="video/collection.mp4"></video>
    <div class="article">COLLECTION</div>
    <a href="<?= $Collection->getMainUrl() ?>">
      <div class="button d-flex justify-content-center align-items-center">
        <div class="shopNow d-flex justify-content-center align-items-center">SHOP NOW</div>&ensp;
        <i class="arrowR fas fa-arrow-right h4 m-0 animate__animated animate__infinite"></i>
      </div>
    </a>
  </div>
  <div class="banner">
    <img src="img/shoes.jpg">
    <div class="article">SHOES</div>
    <a href="<?= $Shoes->getMainUrl() ?>">
      <div class="button d-flex justify-content-center align-items-center">
        <div class="shopNow d-flex justify-content-center align-items-center">SHOP NOW</div>&ensp;
        <i class="arrowR fas fa-arrow-right h4 m-0 animate__animated animate__infinite"></i>
      </div>
    </a>
  </div>
  <div class="video">
    <video autoplay loop muted src="video/specialPrices.mp4"></video>
    <a href="<?= $SpecialPrices->getMainUrl() ?>">
      <div class="button2 d-flex justify-content-center align-items-center">
        <div class="shopNow d-flex justify-content-center align-items-center">SHOP NOW</div>&ensp;
        <i class="arrowR fas fa-arrow-right h4 m-0 animate__animated animate__infinite"></i>
      </div>
    </a>
  </div>
  <div class="video">
    <video autoplay loop muted src="video/joinLife.mp4"></video>
    <div class="article">JOIN LIFE</div>
    <a href="<?= $JoinLife->getMainUrl() ?>">
      <div class="button d-flex justify-content-center align-items-center">
        <div class="shopNow d-flex justify-content-center align-items-center">SHOP NOW</div>&ensp;
        <i class="arrowR fas fa-arrow-right h4 m-0 animate__animated animate__infinite"></i>
      </div>
    </a>
  </div>
</div>

<div class="arrow1">
  <i class="prev fas fa-chevron-left h2 text-white m-0"></i>
</div>

<div class="arrow2">
  <i class="next fas fa-chevron-right h2 text-white m-0"></i>
</div>

<div class="title container-fluid text-center h2 mb-4">New In</div>
<div class="newInShowCon mb-5">
  <?php include "api/newShow.php" ?>
</div>

<div class="title container-fluid text-center h2 mb-4">For Inspiration</div>
<div class="forInspirationCon uk-container uk-container-large mb-5">
  <?php include "api/forInspiration.php" ?>
</div>

<div class="title container-fluid text-center h2 mb-4">Collection</div>
<div class="collectionCon mb-5">
  <?php include "api/collection.php" ?>
</div>

<div class="title container-fluid text-center h2 mb-4">special Prices</div>
<div class="specialPricesCon mb-4">
  <?php include "api/specialPrices.php" ?>
</div>

<div class="specialPricesCon-card uk-container mb-5">
  <?php include "api/specialPrices-card.php" ?>
</div>





