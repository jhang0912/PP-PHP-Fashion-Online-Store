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
  
  public function getLoad ()
  {
    return $this->load();
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
    $this->gender=(!empty($_GET['page']) && $_GET['page']!='home')?$_GET['page']:'men';
    $this->mainSort=$mainSort;
  }
  
  public function getMainUrl()
  {
    return $this->mainUrl();
  }
  
  private function mainUrl ()
  {
    return "?page=$this->gender&mainSort=$this->mainSort";
  }

}

/* 產生次分類網址 */

class getUrl2
{
  private $ndSort;
  private $mainSort;

  public function __construct($mainSort,$ndSort)
  {
    $this->mainSort=$mainSort;
    $this->ndSort=$ndSort;
  }

  public function getNdUrl()
  {
    return $this->ndUrl();
  }

  private function ndUrl()
  {
    return "&mainSort=$this->mainSort&ndSort=$this->ndSort";
  }
}




