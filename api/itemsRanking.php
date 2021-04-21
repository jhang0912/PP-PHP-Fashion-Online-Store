<div class="itemRankShow uk-container d-flex justify-content-center align-items-center p-0">
  <?php
  for ($i = 1; $i <= 5; $i++) {
  ?>
    <div class="itemRank-card d-none d-md-flex flex-wrap justify-content-center align-items-center border overflow-hidden <?= ($i != 1) ? 'ms-3' : ''; ?> <?= ($i != 5) ? 'me-3' : ''; ?>" data-index="<?= $i ?>">
      <a href="">
        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
          <img src="./img/itemsRanking/<?= $i ?>.jpg">
          <img class="uk-transition-scale-up uk-position-cover" src="./img/itemsRanking/<?= $i ?>_back.jpg">
        </div>
        <img class="rankP" src="img/itemsRanking/rank<?= $i ?>.png" alt="">
      </a>
      <div class="h3 col-12 ms-5">title</div>
      <div class="h5 col-12 ms-5">name</div>
      <div class="h5 col-12 ms-5">price</div>
    </div>
  <?php
  }
  ?>
  <?php
  for ($i = 1; $i <= 2; $i++) {
  ?>
    <div class="itemRank-card d-flex d-md-none flex-wrap justify-content-center align-items-center border overflow-hidden <?= ($i != 1) ? 'ms-3' : ''; ?> <?= ($i != 2) ? 'me-3' : ''; ?>" data-index="<?= $i ?>">
      <a href="">
        <img src="./img/itemsRanking/<?= $i ?>.jpg">
        <?php
        if ($i < 4) {
        ?>
          <img class="rankP" src="img/itemsRanking/rank<?= $i ?>.png" alt="">
        <?php
        }
        ?>
      </a>
      <div class="h3 col-12 ms-5">title</div>
      <div class="h5 col-12 ms-5">name</div>
      <div class="h5 col-12 ms-5">price</div>
    </div>
  <?php
  }
  ?>
</div>