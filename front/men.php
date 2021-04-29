<?php
if
(!empty($_GET['ndSort']) || !empty($_GET['mainSort']))
{
  include "api/goods.php";
}
else
{
  include "api/home.php";
}