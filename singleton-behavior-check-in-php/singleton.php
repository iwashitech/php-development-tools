<?php
class Singleton {
  private static $uniqueInstance;
  private $str;

  private function __construct() {
    echo '初回のインスタンス化ここから<br>';
    $this->str = date("Y-m-d H:i:s") . "." . substr(explode(".", (microtime(true) . ""))[1], 0, 3);
    echo $this->str . '<br>';
    echo '初回のインスタンス化ここまで<br>';
  }

  public static function getInstance() {
    if (!isset(static::$uniqueInstance)) {
      static::$uniqueInstance = new Singleton();
    }

    return static::$uniqueInstance;
  }

  public function get() {
    echo $this->str . '<br>';
  }
}

$obj1 = Singleton::getInstance();
sleep(3);
$obj2 = Singleton::getInstance();
sleep(3);
$obj3 = Singleton::getInstance();

$obj1->get();
$obj2->get();
$obj3->get();