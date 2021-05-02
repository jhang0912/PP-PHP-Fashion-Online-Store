<?php
include_once "../toolKit.php";
$test = new getMSC($_GET['mainSortClicked'], $_GET['ndSortClicked'], $_GET['text'], $_GET['genderClicked']);
foreach ($test->call_MSC() as $key => $value) {
?>
  <div class="goods-card col-6 col-xl-4 col-xxl-3 flex-wrap justify-content-center align-items-center border overflow-hidden bg-light">
    <a href="" class="text-decoration-none text-dark">
      <div class="uk-inline-clip uk-transition-toggle">
        <img src="./img/<?= $value['reference'] ?>/<?= $_GET['genderClicked'] ?>/<?= $value['category'] ?>/<?= unserialize($value['img'])[0] ?>">
        <img class="uk-transition-scale-up uk-position-cover" src="./img/<?= $value['reference'] ?>/<?= $_GET['genderClicked'] ?>/<?= $value['category'] ?>/<?= unserialize($value['img'])[1] ?>">
      </div>
      <div class="d-none d-sm-block col-12 h6 p-1"><?= $value['name'] ?></div>
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