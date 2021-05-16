<?php
include_once "../toolKit.php";

$register_data = new check_registe_data($_POST, $_POST['email']);

/* ajax 檢查 */

switch ($register_data->call_check_email()) { //先檢查信箱是否存在
  case true:
    echo false;
    break;
  case false:
    if ($register_data->call_check_pass()) { //再檢查密碼是否正確
      echo true;
    } else {
      echo false;
    }
    break;
}
