<?php
$test = new getMSC($_GET['mainSort'], $_GET['ndSort'],'Price(high-low)');
$reference = ($_GET['mainSort'] == 'shoes' || $_GET['ndSort'] == 'shoes') ? 'shoes' : 'collection';
?>

<div class="goodsCon container d-flex justify-content-between align-items-center p-3">
  <div class="goodsCounts h5 m-0">all <?= count($test->call_MSC()) ?></div>
  <div class="goodsBreadcrumb h5 m-0"><?= $_GET['page'] ?>'s  <?= $_GET['mainSort'] ?></div>
  <div class="goodsSort">
  <button class="uk-button uk-button-default border border-dark" type="button">Sort</button>
  <div uk-dropdown="pos: bottom-justify">
      <ul class="uk-nav uk-dropdown-nav">
        <li><a href="#">Most Sold</a></li>
        <li><a href="#">Newest</a></li>
        <li><a href="#">Price(high-low)</a></li>
        <li><a href="#">Price(low-high)</a></li>
      </ul>
    </div>
  </div>
</div>








<div class="specShow uk-container uk-container-small d-flex flex-wrap justify-content-start align-items-center">
  <?php
  foreach ($test->call_MSC() as $key => $value) {
  ?>
    <div class="spec-card col-4 d-flex flex-wrap justify-content-center align-items-center border overflow-hidden bg-light" data-index="<?= $key ?>">
      <a href="" class="text-decoration-none text-dark">
        <div class="uk-inline-clip uk-transition-toggle">
          <img src="./img/<?= $reference ?>/<?= $_GET['page'] ?>/<?= $value['category'] ?>/<?= unserialize($value['img'])[0] ?>">
          <img class="uk-transition-scale-up uk-position-cover" src="./img/<?= $reference ?>/<?= $_GET['page'] ?>/<?= $value['category'] ?>/<?= unserialize($value['img'])[1] ?>">
        </div>
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
</div>