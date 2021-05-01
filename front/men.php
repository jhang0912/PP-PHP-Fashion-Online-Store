<?php
if
(!empty($_GET['ndSort']) || !empty($_GET['mainSort']))
{
  include "goods.php";
}
else
{
  include "./home.php";
}