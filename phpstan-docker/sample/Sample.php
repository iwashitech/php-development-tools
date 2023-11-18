<?php
class Sample {
  $foo = '';
  // private int|string $foo = '';
  function __construct(string $foo) {
    $this->foo = $foo;
  }
  public function foo() :void {
    var_dump($this->foo);
  }
}