<?php
include_once "../toolKit.php";
?>
<div class="slick mb-5">
  <div class="<?= ${$genderN}->call_className() ?>">
    <?= ${$genderN}->call_HTML() ?>
    <div class="title d-flex flex-wrap justify-content-center align-items-center">
      <div class="article container">NEW IN</div>
      <a class="container d-flex justify-content-center align-items-center text-decoration-none" href="<?= $NewIn->getMainUrl() ?>">
        <div class="button d-flex justify-content-center align-items-center">
          <div class="shopNow d-flex justify-content-center align-items-center">SHOP NOW</div>&ensp;
          <i class="arrowR fas fa-arrow-right h4 m-0 animate__animated animate__infinite"></i>
        </div>
      </a>
    </div>
  </div>
  <div class="<?= ${$genderC}->call_className() ?>">
    <?= ${$genderC}->call_HTML() ?>
    <div class="title d-flex flex-wrap justify-content-center align-items-center">
      <div class="article container">COLLECTION</div>
      <a class="container d-flex justify-content-center align-items-center text-decoration-none" href="<?= $Collection->getMainUrl() ?>">
        <div class="button d-flex justify-content-center align-items-center">
          <div class="shopNow d-flex justify-content-center align-items-center">SHOP NOW</div>&ensp;
          <i class="arrowR fas fa-arrow-right h4 m-0 animate__animated animate__infinite"></i>
        </div>
      </a>
    </div>
  </div>
  <div class="<?= ${$genderC}->call_className() ?>">
    <?= ${$genderS}->call_HTML() ?>
    <div class="title d-flex flex-wrap justify-content-center align-items-center">
      <div class="article container">SHOES</div>
      <a class="container d-flex justify-content-center align-items-center text-decoration-none" href="<?= $Shoes->getMainUrl() ?>">
        <div class="button d-flex justify-content-center align-items-center">
          <div class="shopNow d-flex justify-content-center align-items-center">SHOP NOW</div>&ensp;
          <i class="arrowR fas fa-arrow-right h4 m-0 animate__animated animate__infinite"></i>
        </div>
      </a>
    </div>
  </div>

  <div class="<?= ${$genderSP}->call_className() ?>">
    <?= ${$genderSP}->call_HTML() ?>
    <a href="<?= $SpecialPrices->getMainUrl() ?>">
      <div class="button2 d-flex justify-content-center align-items-center">
        <div class="shopNow d-flex justify-content-center align-items-center">SHOP NOW</div>&ensp;
        <i class="arrowR fas fa-arrow-right h4 m-0 animate__animated animate__infinite"></i>
      </div>
    </a>
  </div>
  <div class="<?= ${$genderC}->call_className() ?>">
    <?= ${$genderJ}->call_HTML() ?>
    <div class="title d-flex flex-wrap justify-content-center align-items-center">
      <div class="article container">JOIN LIFE</div>
      <a class="container d-flex justify-content-center align-items-center text-decoration-none" href="<?= $JoinLife->getMainUrl() ?>">
        <div class="button d-flex justify-content-center align-items-center">
          <div class="shopNow d-flex justify-content-center align-items-center">SHOP NOW</div>&ensp;
          <i class="arrowR fas fa-arrow-right h4 m-0 animate__animated animate__infinite"></i>
        </div>
      </a>
    </div>
  </div>
</div>

<div class="arrow1">
  <i class="prev fas fa-chevron-left h2 text-white m-0"></i>
</div>

<div class="arrow2">
  <i class="next fas fa-chevron-right h2 text-white m-0"></i>
</div>

<div class="themeCon bg-light mb-5 p-3">
  <div class="title h2 text-center">Theme Activities</div>
  <?php include "api/theme.php" ?>
</div>

<div class="forInspirationCon uk-container uk-container-large bg-light shadow mb-5 p-3">
  <div class="title container-fluid h2 text-center">For Inspiration</div>
  <?php include "api/forInspiration.php" ?>
</div>

<div class="collectionCon bg-light mb-5 p-3">
  <div class="title container-fluid h2 text-center">Collection</div>
  <?php include "api/collection.php" ?>
</div>

<div class="itemsRankingCon uk-container uk-container-large bg-light shadow mb-5 p-3">
  <div class="title container-fluid h2 text-center">Items Ranking</div>
  <?php include "api/itemsRanking.php" ?>
</div>

<div class="shoesCon bg-light mb-5 p-3">
  <div class="title container-fluid h2 text-center">Shoes</div>
  <?php include "api/shoes.php" ?>
</div>

<div class="specialPricesCon uk-container uk-container-large bg-light shadow mb-5 p-3">
  <div class="title container-fluid h2 text-center text-danger">special Prices</div>
  <?php include "api/specialPrices-card.php" ?>
</div>