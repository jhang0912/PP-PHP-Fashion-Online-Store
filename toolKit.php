<?php
date_default_timezone_set("Asia/Taipei");

session_start();

// 
/* 讀取頁面 */
function loadPages ($type){
  global $page;

  $page=(!empty($_GET["page"]))?$_GET["page"]:"home";

  $pageFile="$type/".$page.".php";

  if(file_exists($pageFile))
  {
    return include $pageFile;
  }
  else
  {
    return include "$type/home.php";
  }
}

