<div class="newInShow container d-flex flex-wrap justify-content-center align-items-center">
  <?php
  $title = [
    1 => "Men's Life Style",
    3 => "New Arrivals For Spring"
  ];
  for ($i = 1; $i <= 3; $i += 2) {
  ?>
    <div class="new-card col-12 col-lg-5 d-flex flex-wrap justify-content-center align-items-center">
      <a href="">
        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
          <img src="img/newInShow/<?= $i ?>.jpg">
          <img src="img/newInShow/<?= $i + 1 ?>.jpg" class="uk-transition-scale-up uk-position-cover">
        </div>
      </a>
      <div class="new-card-content h3 text-white">
        <div class="new-card-title h1 text-white"><?= $title[$i] ?></div>
        <i class="newcard-arrowR fas fa-arrow-right h4 m-0 animate__animated animate__infinite"></i>
      </div>
    </div>
  <?php
  }
  ?>
</div>