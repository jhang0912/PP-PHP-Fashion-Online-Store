<?php
date_default_timezone_set("Asia/Taipei");

session_start();

/* 連接資料庫 */
$mSlick = new DB('Fashion_slick_men');
$wSlick = new DB('Fashion_slick_women');
$NEWIN = new DB('Fashion_new_in');
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
  private $ndSort;
  private $mainSort;

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

/* 在slick元件中分辨檔案是否為jpg或mp4並產生元件 */
$men = $mSlick->call_all(['display' => '1']);
$menNewIn = new getHTML('men',$men[0]['newIn']);
$menCollection = new getHTML('men',$men[0]['collection']);
$menShoes = new getHTML('men',$men[0]['shoes']);
$menSpecialPrice = new getHTML('men',$men[0]['specialPrice']);
$menJoinLife = new getHTML('men',$men[0]['joinLife']);

$women = $wSlick->call_all(['display' => '1']);
$womenNewIn = new getHTML('women',$women[0]['newIn']);
$womenCollection = new getHTML('women',$women[0]['collection']);
$womenShoes = new getHTML('women',$women[0]['shoes']);
$womenSpecialPrice = new getHTML('women',$women[0]['specialPrice']);
$womenJoinLife = new getHTML('women',$women[0]['joinLife']);
class getHTML
{
  private $gender;
  private $extension;
  private $file;

  public function __construct($gender,$file)
  {
    $this->gender=$gender;
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
$genderN = ($_GET['page'] == 'men' || $_GET['page'] == 'home') ? 'menNewIn' : 'womenNewIn';
$genderC = ($_GET['page'] == 'men' || $_GET['page'] == 'home') ? 'menCollection' : 'womenCollection';
$genderS = ($_GET['page'] == 'men' || $_GET['page'] == 'home') ? 'menShoes' : 'womenShoes';
$genderSP = ($_GET['page'] == 'men' || $_GET['page'] == 'home') ? 'menSpecialPrice' : 'womenSpecialPrice';
$genderJ = ($_GET['page'] == 'men' || $_GET['page'] == 'home') ? 'menJoinLife' : 'womenJoinLife';
