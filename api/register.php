<?php
include_once "../toolKit.php";

$register_data = new check_registe_data($_POST, $_POST['email']);

/* 檢查email */
if ($register_data->call_check_email()) {
  /* 再次過濾資料 */
  $filtered_data = $register_data->call_filter();
  /* 寫進資料庫 */
  $Member->call_save($filtered_data);
  echo "註冊成功";
} else {
  echo "不可使用";
}

