<?php
include_once "../toolKit.php";

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
    <div class="for-card d-flex flex-wrap justify-content-center align-items-center border overflow-hidden ms-3 me-3">
      <a href="" class="mb-2"><img src="./img/collection/<?= $_GET['page'] ?>/<?= $value2['category'] ?>/<?= unserialize($value2['img'])[0] ?>"></a>
      <div class="h6 col-12 ms-3 mb-3"><?= $value2['name'] ?></div>
      <div class="h6 col-12 ms-3 mb-3"><?= $value2['category'] ?></div>
      <div class="h6 col-12 ms-3">$<?= $value2['price'] ?></div>
    </div>
  <?php
  }
  ?>
</div>
<i class="next2 fas fa-arrow-right rounded h2 m-0"></i>