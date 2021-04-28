<?php
include_once "../toolKit.php";

$newIn =
  [
    'men' => [
      'This Week',
      'collection',
      'Shoes',
      'All New Arrivals'
    ],
    'women' => [
      'This Week',
      'collection',
      'Shoes',
      'All New Arrivals'
    ],
  ];

$collection =
  [
    'men' => [
      'Jackets',
      'Leather jackets',
      'Blazers',
      'Sweaters',
      'Shirts',
      'Cardigans',
      'T-Shirts',
      'Polos'
    ],
    'women' => [
      'Jackets',
      'Leather jackets',
      'Blazers',
      'Sweaters',
      'Shirts',
      'Cardigans',
      'T-Shirts',
      'Trousers'
    ]
  ];

$shoes =
  [
    'men' => [
      'All',
      'Sneakers',
      'loafers',
      'Smart Shoes',
      'C-ONE Capsule'
    ],
    'women' => [
      'All',
      'Sneakers',
      'Flat Shoes',
      'Sandal',
      'Boots'
    ],
  ];

$specialPrices =
  [
    'men' => [
      'All',
      'Shirt & POLO & T-Shirt',
      'Trousers',
      'Jackets & Blazers',
      'Shoes'
    ],
    'women' => [
      'All',
      'Shirt & POLO & T-Shirt',
      'Trousers',
      'Jackets & Blazers',
      'Shoes'
    ]
  ];

$joinLife =
  [
    'men' => [
      'Collection'
    ],
    'women' => [
      'Collection'
    ]
  ];
?>
<div class="ndSortCon flex-wrap justify-content-center align-items-center col-12 ps-5 pe-5">
<?php
foreach (${$_GET['nextId']}[$_GET['genderClick']] as $key => $value) {

  ${$value} = new getUrl2($_GET['nextId'], $value);
?>
  <div class="ns text-center m-3"><a class="<?= ($_GET['nextId'] == 'specialPrices') ? 'text-danger' : ''; ?>" href="?page=<?= $_GET['genderClick'] ?><?= ${$value}->getNdUrl() ?>"><?= $value ?></a></div>
<?php
}
?>
</div>