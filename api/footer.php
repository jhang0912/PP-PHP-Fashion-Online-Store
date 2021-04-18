<?php
$section = [
  'Help' => [
    'Frequently asked questions',
    'How to purchase',
    'Transport and delivery',
    'Exchanges and returns',
    'Payments',
    'Contact'
  ],
  'Company' => [
    'Store search',
    'History of the brand',
    'Inditex',
    'Policy',
    'Values / CSR',
    'Work with us',
    'Cookie settings'
  ],
  'Follow Us' => [
    'Facebook',
    'Twitter',
    'Youtube',
    'Pinterest',
    'Instagram'
  ],
  'Download Our APP' => [
    'appstore',
    'googlePlay'
  ]
];
?>
<div class="footerCon container-fluid d-flex flex-wrap justify-content-center align-items-center">
  <div class="footer col-10 d-flex justify-content-center align-items-start p-5">
    <?php
    foreach ($section as $key => $value) {
    ?>
      <div class="col-3 text-white text-center">
        <div class="border-bottom text-white h4 mb-4 p-3"><?= $key ?></div>
        <?php
        foreach ($value as $key2 => $value2) {
        ?>
          <a href="" class="d-block text-decoration-none mb-2">
            <?php
            if ($key == 'Download Our APP') {
            ?>
              <img src="img/<?= $value2 ?>.png" alt="">
            <?php
            } else {
            ?>
              <div class="footer-child container-fluid text-white p-2"><?= $value2 ?></div>
            <?php
            }
            ?>
          </a>
        <?php
        }
        ?>
      </div>
    <?php
    }
    ?>
  </div>
  <div class="container-fluid text-center text-white p-3">© 2021 Massio Dutti All rights reserved.</div>
</div>