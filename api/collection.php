<div class="collectionShow d-flex flex-wrap justify-content-center align-items-center">
  <?php
  $sort = [
    'Jacket',
    'Leather jacket',
    'Blazer',
    'Sweater',
    'Shirt',
    'Cardigan',
    'T-Shirt',
    'Polo',
  ];

  for ($i = 0; $i < 8; $i++) {
    ${$sort[$i]} = new getUrl2('collection', $sort[$i]);
  ?>
    <div class="col-6 col-lg-4 col-xl-3 d-flex flex-wrap justify-content-center align-items-center p-1 wow animate__animated animate__fadeInUp">
      <a class="d-flex flex-wrap justify-content-center align-items-center" href="?page=<?= (!empty($_GET['page']) && $_GET['page'] != 'home') ? $_GET['page'] : 'men' ?><?= ${$sort[$i]}->getNdUrl() ?>">
        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
          <img class="uk-transition-scale-up uk-transition-opaque" src="img/collection/<?= (!empty($_GET['page']) && $_GET['page'] != 'home') ? $_GET['page'] : 'men' ?>/<?= $sort[$i] ?>.jpg" alt="<?= (!empty($_GET['page']) && $_GET['page'] != 'home') ? $_GET['page'] : 'men' ?> <?= $sort[$i] ?>">
        </div>
      </a>
      <div class="co-title container h3 text-center <?= ($i < 4) ? 'm-3' : 'mt-3'; ?>"><?= $sort[$i] ?></div>
    </div>
  <?php
  }
  ?>
</div>