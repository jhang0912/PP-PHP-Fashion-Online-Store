<div class="container-fluid d-flex justify-content-between align-items-center p-4">
  <div class="goodsCounts h4 m-0">all</div>
  <div class="goodsBreadcrumb h4 m-0"><?= $_GET['page'] ?>'s <?= $_GET['mainSort'] ?></div>
  <div class="goodsSort">
    <button class="uk-button uk-button-default border border-dark" type="button">Sort</button>
    <div uk-dropdown="pos: bottom-justify">
      <ul class="uk-nav uk-dropdown-nav">
        <li><a>Most Sold</a></li>
        <li><a>Newest</a></li>
        <li><a>Price(high-low)</a></li>
        <li><a>Price(low-high)</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="goodsCon container-fluid d-flex flex-wrap justify-content-between align-items-start">
  <div class="leftMainSort col-2 d-flex flex-wrap justify-content-center align-items-center bg-light shadow p-4">
    <div id="left_newIn" class="container border-bottom h5 mb-4 p-3">
      <a href="<?= $NewIn->getMainUrl() ?>" class="text-decoration-none text-dark">new in</a>
    </div>

    <div id="left_collection" class="container border-bottom h5 mb-4 p-3">
      <a href="<?= $Collection->getMainUrl() ?>" class="text-decoration-none text-dark">collection</a>
    </div>

    <div id="left_shoes" class="container border-bottom h5 mb-4 p-3">
      <a href="<?= $Shoes->getMainUrl() ?>" class="text-decoration-none text-dark">shoes</a>
    </div>

    <div id="left_specialPrices" class="container border-bottom h5 mb-4 p-3">
      <a href="<?= $SpecialPrices->getMainUrl() ?>" class="text-decoration-none text-danger">special price</a>
    </div>

    <div id="left_joinLife" class="container border-bottom h5 mb-4 p-3">
      <a href="<?= $JoinLife->getMainUrl() ?>" class="text-decoration-none text-dark">join life</a>
    </div>
  </div>


  <div class="goodsShow col-10 d-flex flex-wrap justify-content-start align-items-center mb-5 ps-2">
  </div>
</div>