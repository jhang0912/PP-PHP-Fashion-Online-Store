<?php
for ($i=1; $i <= 6 ; $i++) { 
?>
<div class="for-card d-flex flex-wrap justify-content-center align-items-center border rounded overflow-hidden shadow-sm mb-4 ms-3 me-3" data-index="<?=$i?>">
    <a href=""><img src="./img/forInspiration/<?=$i?>.jpg"></a>
    <h2 class="col-12 ms-5">title</h2>
    <h5 class="col-12 ms-5">name</h5>
    <h5 class="col-12 ms-5">price</h5>
  </div>
<?php
}
?>
