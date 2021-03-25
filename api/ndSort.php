<?php

// $_GET['nextId']='newIn';

$newIn=[
  'This Week',
  'All New Arrivals',
  'Collection',
  'Shoes'
];

$collection=[
  'Jackets',
  'Leather jackets',
  'Blazers',
  'Sweaters',
  'Shirts',
  'Cardigans',
  'T-Shirts',
  'Polos',
];

$shoes=[
  'All',
  'Sneakers',
  'loafers',
  'Smart Shoes',
  'C-ONE Capsule'
];

$specialPrices=[
  'All',
  'Shirt & POLO & T-Shirt',
  'Trousers',
  'Jackets & Blazers',
  'Shoes'
];

$joinLife=[
  'Collection'
];


foreach (${$_GET['nextId']} as $key => $value) 
{
?>
<div class="ns text-center m-3"><a href="<?=$value?>"><?=$value?></a></div>
<?php
}
?>