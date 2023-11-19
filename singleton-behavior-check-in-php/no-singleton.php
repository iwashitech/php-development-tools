<?php
class Singleton {
  private $str;

  function __construct() {
    echo '初回のインスタンス化ここから<br>';
    $this->str = date("Y-m-d H:i:s") . "." . substr(explode(".", (microtime(true) . ""))[1], 0, 3);
    echo $this->str . '<br>';
    echo '初回のインスタンス化ここまで<br>';
  }

  public function get() {
    echo $this->str . '<br>';
  }
}

$obj1 = new Singleton();
sleep(3);
$obj2 = new Singleton();
sleep(3);
$obj3 = new Singleton();

$obj1->get();
$obj2->get();
$obj3->get();