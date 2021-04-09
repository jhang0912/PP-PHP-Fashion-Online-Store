<?php
for ($i=1; $i <= 6 ; $i++) { 
?>
<div class="for-card d-flex flex-wrap justify-content-center align-items-center border rounded overflow-hidden shadow-sm mb-4 ms-3 me-3" data-index="<?=$i?>">
    <a href=""><img src="./img/forInspiration/<?=$i?>.jpg"></a>
    <div class="h2 col-12 ms-5">title</div>
    <div class="h5 col-12 ms-5">name</div>
    <div class="h5 col-12 ms-5">price</div>
  </div>
<?php
}
?>
