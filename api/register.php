<?php
include_once "../toolKit.php";

$register_data = new check_registe_data($_POST, $_POST['email']);

/* 再次過濾資料 */
$filtered_data = $register_data->call_filter();
/* 寫進資料庫 */
if ($filtered_data != false){
  $Member->call_save($filtered_data);
}else{
  echo false;
}

