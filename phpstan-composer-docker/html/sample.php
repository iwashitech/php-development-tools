<?php
class Sample {
  $foo = '';
  function __construct() {
    $this->foo = 'Foo';
  }

  public function show() {
    $fooJa = match($this->foo) {
      'Foo' => 'ふー',
      'Bar' => 'ばー',
    };
    var_dump($fooJa);
  }
}