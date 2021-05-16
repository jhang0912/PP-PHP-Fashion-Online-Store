<?php
include_once "../toolKit.php";

$register_data = new check_registe_data($_POST['data'], $_POST['email']);

// print_r($register_data);

/* 再次過濾資料 */
$filtered_data = $register_data->call_filter();
/* 第二次過濾資料格式 */
if ($filtered_data != false) {
  print_r($register_data->call_filter_register_form());
} else {
  echo false;
}
