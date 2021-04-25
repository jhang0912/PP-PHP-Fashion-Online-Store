<?php
include_once "../toolKit.php";
$newIn = $NEWIN->call_find(['gender' => ($_GET['page'] == 'women') ? 'women' : 'men', 'display' => 1]);
$img = unserialize($newIn['img']);
?>
<div class="newInShow container d-flex flex-wrap justify-content-center align-items-center">
  <div class="new-card col-12 col-md-8 col-lg-4 d-flex flex-wrap justify-content-evenly align-items-center me-2">
    <a href="">
      <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
        <img src="img/newInShow/<?= $img[0] ?>">
        <img src="img/newInShow/<?= $img[1] ?>" class="uk-transition-scale-up uk-position-cover">
      </div>
    </a>
    <div class="new-card-content h3 text-white">
      <div class="new-card-title h1 text-white"><?= $_GET['page'] ?>'s Life Style</div>
      <i class="newcard-arrowR fas fa-arrow-right h4 m-0 animate__animated animate__infinite"></i>
    </div>
  </div>

  <div class="new-card col-12 col-md-8 col-lg-4 d-flex flex-wrap justify-content-evenly align-items-center me-2">
    <a href="">
      <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
        <img src="img/newInShow/<?= $img[2] ?>">
        <img src="img/newInShow/<?= $img[3] ?>" class="uk-transition-scale-up uk-position-cover">
      </div>
    </a>
    <div class="new-card-content h3 text-white">
      <div class="new-card-title h1 text-white">New Arrivals For Spring</div>
      <i class="newcard-arrowR fas fa-arrow-right h4 m-0 animate__animated animate__infinite"></i>
    </div>
  </div>
</div>