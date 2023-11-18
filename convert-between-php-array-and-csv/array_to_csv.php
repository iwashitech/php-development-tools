<?php

$ary = [
  ['code' => 'foo', 'name' => '名前', 'desc' => 'デスクリプション', 'url' => 'foo.html'],
  ['code' => 'bar', 'name' => '名前', 'desc' => 'デスクリプション', 'url' => 'bar.html'],
  ['code' => 'baz', 'name' => '名前', 'desc' => 'デスクリプション', 'url' => 'baz.html'],
];

$filew = fopen('csv_from_array.csv', 'w');
foreach ($ary as $v) {
  fputcsv($filew, $v);
}
fclose($filew);