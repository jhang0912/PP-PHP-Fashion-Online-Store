<?php
include_once "../toolKit.php";

$newIn =
  [
    'men' => [
      'This Week',
      'collection',
      'shoes'
    ],
    'women' => [
      'This Week',
      'collection',
      'shoes'
    ],
  ];

$collection =
  [
    'men' => [
      'jacket',
      'leather jacket',
      'blazer',
      'sweater',
      'shirt',
      'cardigan',
      'T-shirt',
      'polo'
    ],
    'women' => [
      'jacket',
      'leather jacket',
      'blazer',
      'sweater',
      'shirt',
      'cardigan',
      'T-shirt',
      'trouser'
    ]
  ];

$shoes =
  [
    'men' => [
      'all',
      'sneaker',
      'loafer',
      'smart shoes',
      'C-ONE capsule'
    ],
    'women' => [
      'all',
      'sneaker',
      'flat shoes',
      'sandal',
      'boots'
    ],
  ];

$specialPrices =
  [
    'men' => [
      'all',
      'shirt/polo/T-shirt',
      'jacket/blazer',
      'shoes'
    ],
    'women' => [
      'all',
      'shirt/T-shirt',
      'jacket/blazer',
      'shoes'
    ]
  ];

$joinLife =
  [
    'men' => [
      'collection'
    ],
    'women' => [
      'collection'
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