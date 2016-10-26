<?php

require_once 'bootstrap.php';
$park = Fabrika::getPark();
$result =[] ;
//print_r($park);
foreach ($park as $type => $items) {
    foreach ($items as $item) {
        $result[$type]['active'] = count($items);
        $result[$type]['fuel'] = $item->getFuel()*$result[$type]['active'];
        $result[$type]['range'] = $item->getRange()*$result[$type]['active'];
        $result[$type]['personal'] = $item->getPersonal()*$result[$type]['active'];
        $result[$type]['people'] = $item->getPeople()*$result[$type]['active'];
        $result[$type]['money'] = $item->getMoney()*$result[$type]['active'];
    }

   // print_r($item->getFuel());
}

print_r($result);
echo '<hr>';
print_r($park);


$file_csv = fopen('result.csv', 'r+');
foreach ($result as $item) {
    fputcsv($file_csv,$item);
}