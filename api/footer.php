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
  <!-- d-lg-footer -->
  <div class="footer col-10 d-none d-lg-flex justify-content-center align-items-start p-5">
    <?php
    foreach ($section as $key => $value) {
    ?>
      <div class="col-3 text-white text-center">
        <div class="footer-title border-bottom text-white h4 mb-4 p-3"><?= $key ?></div>
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

  <!-- d-footer -->
  <div class="container d-block d-lg-none accordion accordion-flush" id="accordionFlushExample">
    <?php
    foreach ($section as $key => $value) {
    ?>
      <div class="accordion-item border-bottom border-light mb-4">
        <button class="accordion-button collapsed text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?= preg_replace("/\s(?=)/", "", $key); ?>" aria-expanded="false" aria-controls="flush-collapse<?= preg_replace("/\s(?=)/", "", $key); ?>">
          <?= $key ?>
        </button>
        <div id="flush-collapse<?= preg_replace("/\s(?=)/", "", $key); ?>" class="accordion-collapse collapse text-white" aria-labelledby="flush-heading<?= preg_replace("/\s(?=)/", "", $key); ?>" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <?php
            foreach ($value as $key2 => $value2) {
            ?>
              <a href="" class="d-block text-decoration-none mb-4">
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
        </div>
      </div>
    <?php
    }
    ?>
  </div>

  <div class="container-fluid text-center text-white p-2">© 2021 Massimo Dutti All rights reserved.</div>
</div>

  <div class="toTop justify-content-center align-items-center bg-light rounded-circle">
    <i class="fas fa-chevron-up h3 text-dark m-0"></i>
  </div>
