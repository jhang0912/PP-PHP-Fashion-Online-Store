<div class="specShow uk-container d-flex justify-content-center align-items-center p-0">
  <?php
  for ($i = 2; $i <= 6; $i++) {
  ?>
    <div class="spec-card d-none d-md-flex flex-wrap justify-content-center align-items-center border overflow-hidden <?= ($i != 2) ? 'ms-3' : ''; ?> <?= ($i != 5) ? 'me-3' : ''; ?>" data-index="<?= $i ?>">
      <a href="">
        <div class="uk-inline-clip uk-transition-toggle">
          <img src="./img/specialPrices/<?= $i ?>.jpg">
          <img class="uk-transition-scale-up uk-position-cover" src="./img/specialPrices/<?= $i ?>_item.jpg">
        </div>
      </a>
      <div class="h3 col-12 ms-5">title</div>
      <div class="h5 col-12 ms-5">name</div>
      <div class="h5 col-12 ms-5 text-danger">price</div>
    </div>
  <?php
  }
  ?>
  <?php
  for ($i = 2; $i <= 3; $i++) {
  ?>
    <div class="spec-card d-flex d-md-none flex-wrap justify-content-center align-items-center border overflow-hidden <?= ($i != 2) ? 'ms-3' : ''; ?> <?= ($i != 3) ? 'me-3' : ''; ?>" data-index="<?= $i ?>">
      <a href=""><img src="./img/specialPrices/<?= $i ?>.jpg"></a>
      <div class="h3 col-12 ms-5">title</div>
      <div class="h5 col-12 ms-5">name</div>
      <div class="h5 col-12 ms-5 text-danger">price</div>
    </div>
  <?php
  }
  ?>
</div>