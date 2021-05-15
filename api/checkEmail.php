<?php
include_once "../toolKit.php";

$register_data = new check_registe_data($_POST, $_POST['email']);

if ($register_data->call_check_email()) {
  echo true;
} else {
  echo false;
}
