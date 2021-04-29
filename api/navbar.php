<?php
$section = [
  'New In' => [
    'This Week',
    'All New Arrivals',
    'Collection',
    'Shoes'
  ],
  'Collection' => [
    'Jackets',
    'Leather jackets',
    'Blazers',
    'Sweaters',
    'Shirts',
    'Cardigans',
    'T-Shirts',
    'Polos',
  ],
  'Shoes' => [
    'All',
    'Sneakers',
    'loafers',
    'Smart Shoes',
    'C-ONE Capsule'
  ],
  'Special Prices' => [
    'All',
    'Shirt & POLO & T-Shirt',
    'Trousers',
    'Jackets & Blazers',
    'Shoes'
  ],
  'Join Life' => [
    'collection'
  ]
];
?>
<div class="navbar container-fluid d-flex justify-content-between align-items-center ps-4 pe-4">
  <div class="home d-flex align-items-center col-12 col-md-2">
    <a href="?page=home">
      <img src="icon/Massimo-Dutti-Logo.png" title="首頁">
    </a>
  </div>

  <div class="gender d-none d-md-flex justify-content-center align-items-center col-2">
    <div class="men m-3">
      <a href="?page=men" title="男士">
        MEN
        <div id="menLine"></div>
      </a>
    </div>

    <div class="women m-3">
        <a href="?page=women" title="女士">
          WOMEN
          <div id="womenLine"></div>
        </a>
    </div>
  </div>

  <div class="control d-flex align-items-center col-12 col-md-2">
    <div class="bars d-block d-md-none ms-3 me-3">
      <i class="fas fa-bars m-0 h3 text-white"></i>
    </div>

    <div class="favorites d-none d-md-block ms-3 me-3">
      <a href="?page=shoppingCart" title="收藏清單"><i class="fas fa-heart m-0 h4"></i></a>
    </div>

    <div class="shoppingCart ms-3 me-3">
      <a href="?page=shoppingCart" title="購物清單"><i class="fas fa-shopping-cart m-0 h4"></i></a>
    </div>

    <div class="user ms-3 me-3"><a href="?page=userLogin">
        <i class="fas fa-sign-in-alt m-0 h4" title="登入"></i></a>
    </div>
  </div>
</div>

<div class="rwdBar d-block d-md-none bg-light overflow-auto">
  <div class="rwdBar-control d-flex justify-content-between p-3">
    <i class="x-cross fas fa-times h2 m-0"></i>
    <i class="fas fa-heart h2 m-0"></i>
  </div>

  <div class="rwdBar-genderImg d-flex justify-content-center align-items-center pt-3 pb-3">
    <img class="rwdBar-men" src="img/gender/men.jpg" style="width: 150px;">
    <img class="rwdBar-women" src="img/gender/women.jpg" style="width: 150px;">
  </div>

  <div class="rwdBar-genderCon">
    <div class="rwdBar-gender men text-center h3 m-2 pt-3 pb-3" data-gender="men">
      MEN
    </div>

    <div class="rwdBar-gender women text-center h3 m-2 pt-3 pb-3" data-gender="women">
      women
    </div>
  </div>

  <div id="sort-men" class="rwdBar-sort container accordion accordion-flush" id="accordionFlushExample" data-gender="sort-men">
    <a class="d-block text-center pt-2 pb-2" href="?page=men">
      <i class="fas fa-home h1 text-dark m-0"></i>
    </a>
    <?php
    foreach ($section as $key => $value) {
    ?>
      <div class="accordion-item border-bottom border-light mb-3">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?= preg_replace("/\s(?=)/", "", $key); ?>" aria-expanded="false" aria-controls="flush-collapse<?= preg_replace("/\s(?=)/", "", $key); ?>">
          <?= $key ?>
        </button>
        <div id="flush-collapse<?= preg_replace("/\s(?=)/", "", $key); ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?= preg_replace("/\s(?=)/", "", $key); ?>" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <?php
            foreach ($value as $key2 => $value2) {
            ?>
              <a href="" class="d-block text-decoration-none mb-3">
                <div class="rwdBarSort-child container-fluid h6 text-dark p-2"><?= $value2 ?></div>
              </a>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>

  <div id="sort-women" class="rwdBar-sort container accordion accordion-flush" id="accordionFlushExample">
    <a class="d-block text-center pt-2 pb-2" href="?page=women">
      <i class="fas fa-home h1 text-dark m-0"></i>
    </a>
    <?php
    foreach ($section as $key => $value) {
    ?>
      <div class="accordion-item border-bottom border-light mb-3">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?= preg_replace("/\s(?=)/", "", $key); ?>" aria-expanded="false" aria-controls="flush-collapse<?= preg_replace("/\s(?=)/", "", $key); ?>">
          <?= $key ?>
        </button>
        <div id="flush-collapse<?= preg_replace("/\s(?=)/", "", $key); ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?= preg_replace("/\s(?=)/", "", $key); ?>" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <?php
            foreach ($value as $key2 => $value2) {
            ?>
              <a href="" class="d-block text-decoration-none mb-3">
                <div class="rwdBarSort-child container-fluid h6 text-dark p-2"><?= $value2 ?></div>
              </a>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</div>

<div class="sort container-fluid d-none d-md-flex justify-content-center align-items-center ps-4 pe-4">
  <div class="newIn m-2 ms-3 me-3">
    <a href="<?= $NewIn->getMainUrl() ?>" class="mainSort text-dark">NEW IN</a>
    <div id="newIn" class="sortLine"></div>
  </div>

  <div class="collection m-2 ms-3 me-3">
    <a href="<?= $Collection->getMainUrl() ?>" class="mainSort text-dark">COLLECTION</a>
    <div id="collection" class="sortLine"></div>
  </div>

  <div class="shoes m-2 ms-3 me-3">
    <a href="<?= $Shoes->getMainUrl() ?>" class="mainSort text-dark">SHOES</a>
    <div id="shoes" class="sortLine"></div>
  </div>

  <div class="specialPrices m-2 ms-3 me-3">
    <a href="<?= $SpecialPrices->getMainUrl() ?>" class="mainSort text-danger">SPECIAL PRICES</a>
    <div id="specialPrices" class="sortLine"></div>
  </div>

  <div class="joinLife m-2 ms-3 me-3">
    <a href="<?= $JoinLife->getMainUrl() ?>" class="mainSort text-dark">JOIN LIFE</a>
    <div id="joinLife" class="sortLine"></div>
  </div>
</div>

<div class="ndSort col-12">
</div>