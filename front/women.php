<div class="slick mb-5">
  <div class="<?= $womenNewIn->call_className() ?>">
    <?= $womenNewIn->call_HTML() ?>
    <div class="article">NEW IN</div>
    <a href="<?= $NewIn->getMainUrl() ?>">
      <div class="button d-flex justify-content-center align-items-center">
        <div class="shopNow d-flex justify-content-center align-items-center">SHOP NOW</div>&ensp;
        <i class="arrowR fas fa-arrow-right h4 m-0 animate__animated animate__infinite"></i>
      </div>
    </a>
  </div>
  <div class="<?= $womenCollection->call_className() ?>">
    <?= $womenCollection->call_HTML() ?>
    <div class="article">COLLECTION</div>
    <a href="<?= $Collection->getMainUrl() ?>">
      <div class="button d-flex justify-content-center align-items-center">
        <div class="shopNow d-flex justify-content-center align-items-center">SHOP NOW</div>&ensp;
        <i class="arrowR fas fa-arrow-right h4 m-0 animate__animated animate__infinite"></i>
      </div>
    </a>
  </div>
  <div class="<?= $womenShoes->call_className() ?>">
    <?= $womenShoes->call_HTML() ?>
    <div class="article">SHOES</div>
    <a href="<?= $Shoes->getMainUrl() ?>">
      <div class="button d-flex justify-content-center align-items-center">
        <div class="shopNow d-flex justify-content-center align-items-center">SHOP NOW</div>&ensp;
        <i class="arrowR fas fa-arrow-right h4 m-0 animate__animated animate__infinite"></i>
      </div>
    </a>
  </div>
  <div class="<?= $womenSpecialPrice->call_className() ?>">
    <?= $womenSpecialPrice->call_HTML() ?>
    <a href="<?= $SpecialPrices->getMainUrl() ?>">
      <div class="button2 d-flex justify-content-center align-items-center">
        <div class="shopNow d-flex justify-content-center align-items-center">SHOP NOW</div>&ensp;
        <i class="arrowR fas fa-arrow-right h4 m-0 animate__animated animate__infinite"></i>
      </div>
    </a>
  </div>
  <div class="<?= $womenJoinLife->call_className() ?>">
    <?= $womenJoinLife->call_HTML() ?>
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

<div class="newInShowCon bg-light mb-5 p-3">
  <div class="title h2 text-center">New In</div>
  <?php include "api/newShow.php" ?>
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