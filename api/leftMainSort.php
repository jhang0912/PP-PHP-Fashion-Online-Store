<?php
include_once "../toolKit.php";

$newIn =
  [
    'men' => [
      'collection',
      'shoes'
    ],
    'women' => [
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
      'sneaker',
      'loafer',
      'smart shoes',
      'C-ONE capsule'
    ],
    'women' => [
      'sneaker',
      'flat shoes',
      'sandal',
      'boots'
    ],
  ];

$specialPrices =
  [
    'men' => [
      'shirt/polo/T-shirt',
      'jacket/blazer',
      'shoes'
    ],
    'women' => [
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
<?php
foreach (${$_GET['mainSortClicked']}[$_GET['genderClicked']] as $key => $value) {

  ${$value} = new getUrl2($_GET['mainSortClicked'], $value);
?>
  <div class="text-start m-3">
    <div class="leftNdSort text-decoration-none <?= ($_GET['mainSortClicked'] == 'specialPrices') ? 'text-danger' : ''; ?> h6" name="<?=$value?>"><?= $value ?></div>
  </div>
<?php
}
?>