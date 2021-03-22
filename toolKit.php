<?php
date_default_timezone_set("Asia/Taipei");

session_start();


/* 讀取頁面 */
$Front=new loadPages('front');
$Backend=new loadPages('backend');
class loadPages
{
  private $page;
  private $type;

  public function __construct($type)
  {
    $this->page=(!empty($_GET["page"]))?$_GET["page"]:"home";
    $this->type=$type;
  }

  private function load ()
  {
    $pageFile="$this->type/".$this->page.".php";

    if(file_exists($pageFile))
    {
      return $pageFile;
    }
    else
    {
      return "$this->type/home.php";
    }
  }

  public function getLoad ()
  {
    return $this->load();
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

  public function __construct($mainSort)
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



