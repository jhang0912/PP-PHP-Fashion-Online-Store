<?php
if
(!empty($_GET['ndSort']) || !empty($_GET['mainSort']))
{
  include "api/items.php";
}
else
{
  include "api/home.php";
}