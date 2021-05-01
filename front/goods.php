<div class="goodsCon container-fluid d-flex justify-content-between align-items-center mb-5 p-3">
  <div class="goodsCounts h4 m-0">all</div>
  <div class="goodsBreadcrumb h4 m-0"><?= $_GET['page'] ?>'s  <?= $_GET['mainSort'] ?></div>
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

<div class="goodsShow uk-container uk-container-small d-flex flex-wrap justify-content-start align-items-center">
</div>