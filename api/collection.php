<div class="collectionShow d-flex flex-wrap justify-content-center align-items-center">
<?php
$sort=[
  'Jackets',
  'Leather jackets',
  'Blazers',
  'Sweaters',
  'Shirts',
  'Cardigans',
  'T-Shirts',
  'Polos',
];
for ($i = 0; $i < 8; $i++) {
?>
  <div class="col-6 col-lg-4 col-xl-3 d-flex flex-wrap justify-content-center align-items-center text-white ">
    <div class="container text-center"><a href=""><img src="img/collection/<?=$i?>.jpg" class=""></a></div>
    <div class="co-title h3 text-white text-center m-3"><?=$sort[$i]?></div>
  </div>
<?php
}
?>
</div>