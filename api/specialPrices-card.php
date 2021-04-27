<?php
include_once "../toolKit.php";

if ($_GET['page'] == 'women') {
  $collection = $wCollection->call_q("SELECT * FROM `Fashion_collection_women` WHERE `sale` != '0'");
} else {
  $collection = $mCollection->call_q("SELECT * FROM `Fashion_collection_men` WHERE `sale` != '0'");
  $_GET['page'] = 'men';
}

$Rand = array(); //定義為陣列
$count = 4; //共產生幾筆
for ($i = 1; $i <= $count; $i++) {
  $randval = mt_rand(0, (count($collection) - 1)); //取得範圍為0~亂數
  if (in_array($randval, $Rand)) { //如果已產生過迴圈重跑
    $i--;
  } else {
    $Rand[] = $randval; //若無重復則 將亂數塞入陣列
  }
}

$newCollection = array();
foreach ($Rand as $key => $value) {
  $newCollection[] = $collection[$value];
}

?>
<div class="specShow uk-container d-flex justify-content-center align-items-center p-0">
  <?php
  foreach ($newCollection as $key => $value) {
  ?>
    <div class="spec-card d-none d-md-flex flex-wrap justify-content-center align-items-center border overflow-hidden <?= ($key != 0) ? 'ms-3' : ''; ?> <?= ($key != 3) ? 'me-3' : ''; ?>" data-index="<?= $key ?>">
      <a href="" class="text-decoration-none text-dark">
        <div class="uk-inline-clip uk-transition-toggle">
          <img src="./img/collection/<?= $_GET['page'] ?>/<?= $value['category'] ?>/<?= unserialize($value['img'])[0] ?>">
          <img class="uk-transition-scale-up uk-position-cover" src="./img/collection/<?= $_GET['page'] ?>/<?= $value['category'] ?>/<?= unserialize($value['img'])[3] ?>">
        </div>
        <div class="col-12 h6 p-1"><?=$value['name']?></div>
        <div class="col-12 h6 p-1"><?=$value['category']?></div>
        <span class="col-12 h6 p-1 text-decoration-line-through text-secondary">$<?=$value['price']?></span>
        <span class="text-decoration-none text-danger">$<?=floor(($value['price']*$value['sale'])/100)?></span>
      </a>
    </div>
  <?php
  }
  ?>
  <?php
  for ($i = 2; $i <= 3; $i++) {
  ?>
    <div class="spec-card d-flex d-md-none flex-wrap justify-content-center align-items-center border overflow-hidden <?= ($i != 2) ? 'ms-3' : ''; ?> <?= ($i != 3) ? 'me-3' : ''; ?>" data-index="<?= $i ?>">
      <a href=""><img src="./img/specialPrices/<?= $i ?>.jpg"></a>
      <div class="col-12 h6 p-1">title</div>
      <div class="col-12 h6 p-1">name</div>
      <div class="col-12 h6 p-1 text-danger">price</div>
    </div>
  <?php
  }
  ?>
</div>