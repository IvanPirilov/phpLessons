<?php

require_once 'bootstrap.php';

$file = 'test.csv';
$heads = ['','items','kilo'];
$total = ['total','items'=>0,'kilo'=>0];

$file_csv = fopen($file, 'w');
fputcsv($file_csv, $heads);
$result = [
    'helecopter' => ['items'=>5,'kilo'=>6],
    'train' => ['items'=>4,'kilo'=>5]
];
foreach ($result as $key => $info) {
    $total['items'] += $info['items'];
    $total['kilo'] += $info['kilo'];
    fputcsv($file_csv,[$key, $info['items'],$info['kilo']]);
}
fputcsv($file_csv, $total);
fclose($file_csv);
