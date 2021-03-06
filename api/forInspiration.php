<?php
include_once "../toolKit.php";

if ($_GET['page'] == 'women') {
  $collection = $wCollection->call_all(['sale' => 0]);
} else {
  $collection = $mCollection->call_all(['sale' => 0]);
  $_GET['page'] = 'men';
}

$Rand = array(); //定義為陣列
$count = 6; //共產生幾筆
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
<i class="prev2 fas fa-arrow-left rounded h2 m-0"></i>
<div class="forInspiration uk-container d-flex flex-wrap justify-content-center align-items-center">
  <?php
  foreach ($newCollection as $key2 => $value2) {
  ?>
    <div class="for-card d-flex flex-wrap justify-content-start align-items-center border overflow-hidden ms-3 me-3">
      <a href="" class="text-decoration-none text-dark"><img src="./img/collection/<?= $_GET['page'] ?>/<?= $value2['category'] ?>/<?= unserialize($value2['img'])[0] ?>">
        <div class="col-12 h6 p-1"><?= $value2['name'] ?></div>
        <div class="col-12 h6 p-1"><?= $value2['category'] ?></div>
        <span class="p-1">$<?= $value2['price'] ?></span>
      </a>
    </div>
  <?php
  }
  ?>
</div>
<i class="next2 fas fa-arrow-right rounded h2 m-0"></i>