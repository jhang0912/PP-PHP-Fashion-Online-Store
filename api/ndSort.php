<?php
include_once "../toolKit.php";

$newIn=
[
  'This Week',
  'All New Arrivals',
  'Collection',
  'Shoes'
];

$collection=
[
  'Jackets',
  'Leather jackets',
  'Blazers',
  'Sweaters',
  'Shirts',
  'Cardigans',
  'T-Shirts',
  'Polos',
];

$shoes=
[
  'All',
  'Sneakers',
  'loafers',
  'Smart Shoes',
  'C-ONE Capsule'
];

$specialPrices=
[
  'All',
  'Shirt & POLO & T-Shirt',
  'Trousers',
  'Jackets & Blazers',
  'Shoes'
];

$joinLife=
[
  'Collection'
];


foreach (${$_GET['nextId']} as $key => $value) 
{
  ${$value}=new getUrl2($_GET['nextId'],$value);
?>
<div class="ns text-center m-3"><a class="<?=($_GET['nextId']=='specialPrices')?'text-danger':'';?>" href="?page=<?=$_GET['genderClick']?><?=${$value}->getNdUrl()?>"><?=$value?></a></div>
<?php
}
?>