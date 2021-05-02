<?php
date_default_timezone_set("Asia/Taipei");

session_start();

/* 連接資料庫 */
$mSlick = new DB('Fashion_slick_men');
$wSlick = new DB('Fashion_slick_women');
$NEWIN = new DB('Fashion_new_in');
$mCollection = new DB('Fashion_collection_men');
$wCollection = new DB('Fashion_collection_women');
class DB
{

  private $table;
  private $dsn = "mysql:host=localhost;dbname=s1090408;charset=utf8";

  private $pdo;

  public function __construct($table)
  {
    $this->table = $table;
    $this->pdo = new PDO($this->dsn, 's1090408', 's1090408');
  }

  public function call_all(...$arg)
  {
    return $this->all(...$arg);
  }

  public function call_count(...$arg)
  {
    return $this->count(...$arg);
  }

  public function call_find($id)
  {
    return $this->find($id);
  }

  public function call_del($id)
  {
    return $this->del($id);
  }

  public function call_save($arr)
  {
    return $this->save($arr);
  }

  public function call_q($sql)
  {
    return $this->q($sql);
  }

  private function all(...$arg)
  {
    $sql = " select * from $this->table ";

    if (isset($arg[0])) {
      if (is_array($arg[0])) {
        foreach ($arg[0] as $key => $value) {
          $tmp[] = sprintf("`%s`='%s'", $key, $value);
        }
        $sql .= " where " . implode(" && ", $tmp);
      } else {
        $sql .= $arg[0];
      }
    }

    if (isset($arg[1])) {
      $sql .= $arg[1];
    }

    return $this->pdo->query($sql)->fetchAll();
  }

  private function count(...$arg)
  {
    $sql = " select count(*) from $this->table ";

    if (isset($arg[0])) {
      if (is_array($arg[0])) {
        foreach ($arg[0] as $key => $value) {
          $tmp[] = sprintf("`%s`='%s'", $key, $value);
        }
        $sql .= " where " . implode(" && ", $tmp);
      } else {
        $sql .= $arg[0];
      }
    }

    if (isset($arg[1])) {
      $sql .= $arg[1];
    }

    return $this->pdo->query($sql)->fetchColumn();
  }


  private function find($id)
  {
    $sql = " select * from $this->table ";

    if (is_array($id)) {
      foreach ($id as $key => $value) {
        $tmp[] = sprintf("`%s`='%s'", $key, $value);
      }
      $sql .= " where " . implode(" && ", $tmp);
    } else {
      $sql .= " where `id`='$id'";
    }

    return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
  }


  private function del($id)
  {
    $sql = " delete from $this->table ";

    if (is_array($id)) {
      foreach ($id as $key => $value) {
        $tmp[] = sprintf("`%s`='%s'", $key, $value);
      }
      $sql .= " where " . implode(" && ", $tmp);
    } else {
      $sql .= " where `id`='$id'";
    }

    return $this->pdo->exec($sql);
  }


  private function save($arr)
  {
    if (isset($arr['id'])) {
      foreach ($arr as $key => $value) {
        $tmp[] = sprintf("`%s`='%s'", $key, $value);
      }
      $sql = "update $this->table set" . implode(",", $tmp) . " where `id`='{$arr['id']}'";
    } else {
      $sql = "insert into $this->table  (`" . implode("`,`", array_keys($arr)) . "`) values('" . implode("','", $arr) . "')";
    }
    return $this->pdo->exec($sql);
  }


  private function q($sql)
  {
    return $this->pdo->query($sql)->fetchAll();
  }
}


/* 讀取頁面 */
$Front = new loadPages('front');
$Backend = new loadPages('backend');
class loadPages
{
  private $page;
  private $type;

  public function __construct($type)
  {
    $this->page = (!empty($_GET["page"])) ? $_GET["page"] : "home";
    $this->type = $type;
  }

  public function getLoad()
  {
    return $this->load();
  }

  private function load()
  {
    $pageFile = "$this->type/" . $this->page . ".php";

    if (file_exists($pageFile)) {
      return $pageFile;
    } else {
      return "$this->type/home.php";
    }
  }
}

/* 產生主要分類網址 */
$NewIn = new getUrl('newIn');
$Collection = new getUrl('collection');
$Shoes = new getUrl('shoes');
$SpecialPrices = new getUrl('specialPrices');
$JoinLife = new getUrl('joinLife');

class getUrl
{
  private $gender;
  private $mainSort;

  public function __construct($mainSort)
  {
    $this->gender = (!empty($_GET['page']) && $_GET['page'] != 'home') ? $_GET['page'] : 'men';
    $this->mainSort = $mainSort;
  }

  public function getMainUrl()
  {
    return $this->mainUrl();
  }

  private function mainUrl()
  {
    return "?page=$this->gender&mainSort=$this->mainSort";
  }
}

/* 產生次分類網址 */

class getUrl2
{
  protected $ndSort;
  protected $mainSort;

  public function __construct($mainSort, $ndSort)
  {
    $this->mainSort = $mainSort;
    $this->ndSort = $ndSort;
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

/* 讀取主分類的資料庫內容 */

class getMSC extends getUrl2
{
  private $gender;
  private $sort;

  public function __construct($mainSort, $ndSort, $sort, $gender)
  {
    $this->mainSort = $mainSort;
    $this->ndSort = $ndSort;
    $this->sort = $sort;
    $this->gender = $gender;
  }

  public function call_MSC()
  {
    return $this->MSC();
  }

  private function MSC()
  {
    if ($this->ndSort == '' || $this->ndSort == null) {
      switch ($this->mainSort) {
        case 'newIn':
          $c_Goods = new DB("Fashion_collection_$this->gender");
          $max1 = $c_Goods->call_q("SELECT MAX(`no`) FROM `Fashion_collection_$this->gender`");
          $s_Goods = new DB("Fashion_shoes_$this->gender");
          $max2 = $s_Goods->call_q("SELECT MAX(`no`) FROM `Fashion_shoes_$this->gender`");
          return  $goods = $c_Goods->call_q("SELECT * FROM `Fashion_collection_$this->gender` WHERE `no` = {$max1[0][0]} UNION SELECT * FROM `Fashion_shoes_$this->gender` WHERE `no` = {$max2[0][0]} {$this->getSort()}");
          break;
        case 'specialPrices':
          $Goods = new DB("Fashion_collection_$this->gender");
          return $goods = $Goods->call_q("SELECT * FROM `Fashion_collection_$this->gender` WHERE `sale` != 0 UNION SELECT * FROM `Fashion_shoes_$this->gender` WHERE `sale` != 0 {$this->getSort()}");
          break;
        case 'shoes':
          $Goods = new DB("Fashion_shoes_$this->gender");
          return $goods = $Goods->call_q("SELECT * FROM `Fashion_shoes_$this->gender` {$this->getSort()}");
          break;
        default:
          $Goods = new DB("Fashion_collection_$this->gender");
          return $goods = $Goods->call_all('', "{$this->getSort()}");
          break;
      }
    } else {
      switch ($this->mainSort) {
        case 'newIn': //NewIn
          switch ($this->ndSort) {
            case 'all':
              $c_Goods = new DB("Fashion_collection_$this->gender");
              $max1 = $c_Goods->call_q("SELECT MAX(`no`) FROM `Fashion_collection_$this->gender`");
              $s_Goods = new DB("Fashion_shoes_$this->gender");
              $max2 = $s_Goods->call_q("SELECT MAX(`no`) FROM `Fashion_shoes_$this->gender`");
              return  $goods = $c_Goods->call_q("SELECT * FROM `Fashion_collection_$this->gender` WHERE `no` = {$max1[0][0]} UNION SELECT * FROM `Fashion_shoes_$this->gender` WHERE `no` = {$max2[0][0]} {$this->getSort()}");
              break;
            case 'collection':
              $Goods = new DB("Fashion_collection_$this->gender");
              $max = $Goods->call_q("SELECT MAX(`no`) FROM `Fashion_collection_$this->gender`");
              return $goods = $Goods->call_all(['no' => $max[0][0]], "{$this->getSort()}");
              break;
            case 'shoes':
              $Goods = new DB("Fashion_shoes_$this->gender");
              $max = $Goods->call_q("SELECT MAX(`no`) FROM `Fashion_shoes_$this->gender`");
              return $goods = $Goods->call_all(['no' => $max[0][0]], "{$this->getSort()}");
              break;
          }
          break;


        case 'collection': //Collection
          switch ($this->ndSort) {
            case 'all':
              $Goods = new DB("Fashion_collection_$this->gender");
              return $goods = $Goods->call_all('', "{$this->getSort()}");
              break;
            default:
              $Goods = new DB("Fashion_collection_$this->gender");
              return $goods = $Goods->call_all(['category' => $this->ndSort], "{$this->getSort()}");
              break;
          }


        case 'shoes': //Shoes
          switch ($this->ndSort) {
            case 'all':
              $Goods = new DB("Fashion_shoes_$this->gender");
              return $goods = $Goods->call_all('', "{$this->getSort()}");
              break;
            default:
              $Goods = new DB("Fashion_shoes_$this->gender");
              return $goods = $Goods->call_all(['category' => $this->ndSort], "{$this->getSort()}");
              break;
          }
          break;


        case 'specialPrices': //SpecialPrices
          switch ($this->ndSort) {
            case 'all':
              $Goods = new DB("Fashion_collection_$this->gender");
              return $goods = $Goods->call_q("SELECT * FROM `Fashion_collection_$this->gender` WHERE `sale` != 0 UNION SELECT * FROM `Fashion_shoes_$this->gender` WHERE `sale` != 0 {$this->getSort()}");
              break;
            case 'shirt/polo/T-shirt':
              $Goods = new DB("Fashion_collection_$this->gender");
              return $goods = $Goods->call_q("SELECT * FROM `Fashion_collection_$this->gender` WHERE (`category` = 'shirt' || `category` = 'polo' || `category` = 'T-shirt' ) && `sale` != 0 {$this->getSort()}");
              break;
            case 'shirt/T-shirt':
              $Goods = new DB("Fashion_collection_$this->gender");
              return $goods = $Goods->call_q("SELECT * FROM `Fashion_collection_$this->gender` WHERE (`category` = 'shirt' || `category` = 'T-shirt' ) && `sale` != 0 {$this->getSort()}");
              break;
            case 'jacket/blazer':
              $Goods = new DB("Fashion_collection_$this->gender");
              return $goods = $Goods->call_q("SELECT * FROM `Fashion_collection_$this->gender` WHERE (`category` = 'jacket' || `category` = 'blazer' ) && `sale` != 0 {$this->getSort()}");
              break;
            case 'shoes':
              $Goods = new DB("Fashion_shoes_$this->gender");
              return $goods = $Goods->call_q("SELECT * FROM `Fashion_shoes_$this->gender` WHERE `sale` != 0 {$this->getSort()}");
              break;
          }
          break;


        case 'joinLife': //JoinLife
          $Goods = new DB("Fashion_collection_$this->gender");
          return $goods = $Goods->call_all('', "{$this->getSort()}");
          break;
      }
    }
  }

  private function getSort()
  {
    switch ($this->sort) {
      case '':
      case 'Newest':
        return " ORDER BY `id` DESC";
        break;
      case 'Most Sold':
        return " ORDER BY `sold` DESC";
        break;

      case 'Price(high-low)':
        return " ORDER BY `price` DESC";
        break;
      case 'Price(low-high)':
        return " ORDER BY `price` ASC";
        break;
    }
  }
}


/* 在slick元件中分辨檔案是否為jpg或mp4並產生元件 */
$men = $mSlick->call_all(['display' => '1']);
$menNewIn = new getHTML('men', $men[0]['newIn']);
$menCollection = new getHTML('men', $men[0]['collection']);
$menShoes = new getHTML('men', $men[0]['shoes']);
$menSpecialPrice = new getHTML('men', $men[0]['specialPrice']);
$menJoinLife = new getHTML('men', $men[0]['joinLife']);

$women = $wSlick->call_all(['display' => '1']);
$womenNewIn = new getHTML('women', $women[0]['newIn']);
$womenCollection = new getHTML('women', $women[0]['collection']);
$womenShoes = new getHTML('women', $women[0]['shoes']);
$womenSpecialPrice = new getHTML('women', $women[0]['specialPrice']);
$womenJoinLife = new getHTML('women', $women[0]['joinLife']);
class getHTML
{
  private $gender;
  private $extension;
  private $file;

  public function __construct($gender, $file)
  {
    $this->gender = $gender;
    $this->extension = pathinfo($file, PATHINFO_EXTENSION);
    $this->file = $file;
  }

  public function call_className()
  {
    return $this->className();
  }

  public function call_HTML()
  {
    return $this->HTML();
  }

  private function className()
  {
    if ($this->extension == 'jpg') {
      return 'banner';
    } else {
      return 'video';
    }
  }

  private function HTML()
  {
    if ($this->extension == 'jpg') {
      return "<img src='img/slick/$this->gender/$this->file'>";
    } else {
      return "<video autoplay loop muted src='img/slick/$this->gender/$this->file'></video>";
    }
  }
}

/* 產生性別+主分類的字串 */
$genderN = ($_GET['page'] == 'women') ? 'womenNewIn' : 'menNewIn';
$genderC = ($_GET['page'] == 'women') ? 'womenCollection' : 'menCollection';
$genderS = ($_GET['page'] == 'women') ? 'womenShoes' : 'menShoes';
$genderSP = ($_GET['page'] == 'women') ? 'womenSpecialPrice' : 'menSpecialPrice';
$genderJ = ($_GET['page'] == 'women') ? 'womenJoinLife' : 'menJoinLife';

/* 辨別目前的頁面性別 */
if ($_GET['page'] == 'women') {
  $collection = $wCollection->call_all();
} else {
  $collection = $mCollection->call_all();
  $_GET['page'] = 'men';
}
