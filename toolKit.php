<?php
date_default_timezone_set("Asia/Taipei");

session_start();


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

/* 產生主要分類網址 */
$NewIn=new getUrl('newIn');
$Collection=new getUrl('collection');
$Shoes=new getUrl('shoes');
$SpecialPrices=new getUrl('specialPrices');
$JoinLife=new getUrl('joinLife');
class getUrl
{
  private $gender;
  private $mainSort;

  function __construct($mainSort)
  {
    $this->gender=($_GET['page']!='home')?$_GET['page']:'men';
    $this->mainSort=$mainSort;
  }

  private function mainUrl ()
  {
    return "?page=$this->gender&mainSort=$this->mainSort";
  }

  public function getMainUrl()
  {
    return $this->mainUrl();
  }
}







