<?php
$test = new getMSC($_GET['mainSort'], $_GET['ndSort']);
$reference = ($_GET['mainSort'] == 'shoes' || $_GET['ndSort'] == 'shoes') ? 'shoes' : 'collection';
?>


<div class="specShow uk-container uk-container-small d-flex flex-wrap justify-content-start align-items-center">
  <?php
  foreach ($test->MSC() as $key => $value) {
  ?>
    <div class="spec-card col-4 d-none d-md-flex flex-wrap justify-content-center align-items-center border overflow-hidden" data-index="<?= $key ?>">
      <a href="" class="text-decoration-none text-dark">
        <div class="uk-inline-clip uk-transition-toggle">
          <img src="./img/<?= $reference ?>/<?= $_GET['page'] ?>/<?= $value['category'] ?>/<?= unserialize($value['img'])[0] ?>">
          <img class="uk-transition-scale-up uk-position-cover" src="./img/<?= $reference ?>/<?= $_GET['page'] ?>/<?= $value['category'] ?>/<?= unserialize($value['img'])[3] ?>">
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