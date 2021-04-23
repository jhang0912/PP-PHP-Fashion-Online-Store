<?php
date_default_timezone_set("Asia/Taipei");

session_start();

/* 連接資料庫 */
$Slick=new DB('Fashion_slick');
class DB{

  private $table;
  private $dsn="mysql:host=localhost;dbname=s1090408;charset=utf8";

  private $pdo;

  public function __construct($table)
  {
    $this->table=$table;
    $this->pdo=new PDO($this->dsn,'s1090408','s1090408');
  }

  public function call_all(...$arg){
    return $this->all(...$arg);
  }

  private function all(...$arg){
    $sql=" select * from $this->table ";

    if(isset($arg[0])){
      if(is_array($arg[0])){
        foreach($arg[0] as $key=>$value){
          $tmp[]=sprintf("`%s`='%s'",$key,$value);

        }
        $sql .= " where ".implode(" && ",$tmp);
      }else{
        $sql .= $arg[0];
      }
    }

    if(isset($arg[1])){
      $sql .= $arg[1];
    }

    return $this->pdo->query($sql)->fetchAll();
  }



  private function count(...$arg){
    $sql=" select count(*) from $this->table ";

    if(isset($arg[0])){
      if(is_array($arg[0])){
        foreach($arg[0] as $key=>$value){
          $tmp[]=sprintf("`%s`='%s'",$key,$value);

        }
        $sql .= " where ".implode(" && ",$tmp);
      }else{
        $sql .= $arg[0];
      }
    }

    if(isset($arg[1])){
      $sql .= $arg[1];
    }

    return $this->pdo->query($sql)->fetchColumn();
  }


  private function find($id){
    $sql=" select * from $this->table ";

      if(is_array($id)){
        foreach($id as $key=>$value){
          $tmp[]=sprintf("`%s`='%s'",$key,$value);

        }
        $sql .= " where ".implode(" && ",$tmp);
      }else{
        $sql .= " where `id`='$id'";
      }

    return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
  }
  

  private function del($id){
    $sql=" delete from $this->table ";

      if(is_array($id)){
        foreach($id as $key=>$value){
          $tmp[]=sprintf("`%s`='%s'",$key,$value);

        }
        $sql .= " where ".implode(" && ",$tmp);
      }else{
        $sql .= " where `id`='$id'";
      }

    return $this->pdo->exec($sql);
  }


  private function save($arr){
    if(isset($arr['id'])){
      foreach($arr as $key=>$value){
        $tmp[]=sprintf("`%s`='%s'",$key,$value);
      }
      $sql="update $this->table set".implode(",",$tmp)." where `id`='{$arr['id']}'";
    }else{
      $sql="insert into $this->table  (`".implode("`,`",array_keys($arr))."`) values('".implode("','",$arr)."')";
    }
    return $this->pdo->exec($sql);
  }


  private function q($sql){
    return $this->pdo->query($sql)->fetchAll();
  }

}


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




