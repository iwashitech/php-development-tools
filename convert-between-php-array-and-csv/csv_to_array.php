<?php
$all_rows = array();
$handle = @fopen("input.csv", "r");
$header = fgetcsv($handle);
while ($row = fgetcsv($handle)) {
    $all_rows[] = array_combine($header, $row);
}

$file = fopen("output.txt", "w");
foreach($all_rows as $key => $value){
    $txt = '';
    $no = 0;
    $cnt = count($value);
    foreach($value as $k => $v) {
        if ($no == 0) {
            $txt .= "[";
        }
        $txt .= "'" . $k . "' => '" . $v . "', ";  
        if ($no == $cnt - 1) {
            $txt .= "],";
        }
        $no++;
    }
    fwrite($file, $txt."\n");
}
fclose($file);