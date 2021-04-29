<?php
if ($_GET['page'] == 'women') {
  $collection = $wCollection->call_q("SELECT * FROM `Fashion_collection_women` ORDER BY `sold` DESC LIMIT 0,4");
} else {
  $collection = $mCollection->call_q("SELECT * FROM `Fashion_collection_men` ORDER BY `sold` DESC LIMIT 0,4");
  $_GET['page'] = 'men';
}
?>
<div class="itemRankShow uk-container d-flex justify-content-center align-items-center p-0">
  <?php
  foreach ($collection as $key => $value) {
  ?>
    <div class="itemRank-card d-none d-md-flex flex-wrap justify-content-center align-items-center border overflow-hidden <?= ($key != 0) ? 'ms-3' : ''; ?> <?= ($key != 3) ? 'me-3' : ''; ?>" data-index="<?= $key ?>">
      <a href="" class="text-decoration-none text-dark">
        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
          <img src="./img/collection/<?= $_GET['page'] ?>/<?= $value['category'] ?>/<?= unserialize($value['img'])[0] ?>">
          <img class="uk-transition-scale-up uk-position-cover" src="./img/collection/<?= $_GET['page'] ?>/<?= $value['category'] ?>/<?= unserialize($value['img'])[3] ?>">
        </div>
        <img class="rankP" src="img/itemsRanking/rank<?= $key ?>.png">
        <div class="col-12 h6 p-1"><?= $value['name'] ?></div>
        <div class="col-12 h6 p-1"><?= $value['category'] ?></div>
        <?php
        if ($value['sale'] == '0') {/* 有特價的話就顯示出來 */
        ?>
          <span class="itemRank-p p-1">$<?= $value['price'] ?></span>
        <?php
        } else {
        ?>
            <span class="text-decoration-line-through text-secondary p-1">$<?= $value['price'] ?></span>
            <span class="text-danger">$<?= floor(($value['price'] * $value['sale']) / 100) ?></span>
        <?php
        }
        ?>
      </a>
    </div>
  <?php
  }
  ?>
  <?php
  if ($_GET['page'] == 'women') {
    $collection = $wCollection->call_q("SELECT * FROM `Fashion_collection_women` ORDER BY `sold` DESC LIMIT 0,2");
  } else {
    $collection = $mCollection->call_q("SELECT * FROM `Fashion_collection_men` ORDER BY `sold` DESC LIMIT 0,2");
    $_GET['page'] = 'men';
  }

  foreach ($collection as $key => $value) {
  ?>
    <div class="itemRank-card d-flex d-md-none flex-wrap justify-content-center align-items-center border overflow-hidden <?= ($key != 0) ? 'ms-3' : ''; ?> <?= ($key != 1) ? 'me-3' : ''; ?>" data-index="<?= $key ?>">
      <a href="" class="text-decoration-none text-dark">
        <img src="./img/collection/<?= $_GET['page'] ?>/<?= $value['category'] ?>/<?= unserialize($value['img'])[0] ?>">
        <img class="rankP" src="img/itemsRanking/rank<?= $key ?>.png" alt="">
        <div class="itemRank-c col-12 p-1"><?= $value['category'] ?></div>
        <?php
        if ($value['sale'] == '0') {/* 有特價的話就顯示出來 */
        ?>
          <span class="itemRank-p p-1">$<?= $value['price'] ?></span>
        <?php
        } else {
        ?>
            <span class="itemRank-p text-decoration-line-through text-secondary p-1">$<?= $value['price'] ?></span>
            <span class="itemRank-p text-danger">$<?= floor(($value['price'] * $value['sale']) / 100) ?></span>
        <?php
        }
        ?>
      </a>
    </div>
  <?php
  }
  ?>
</div>