<?php

require_once 'bootstrap.php';
$park = Fabrika::getPark();
$machine =[] ;
//print_r($park);
foreach ($park as $type => $items) {
    foreach ($items as $item) {
        $machine[$type]['active'] = count($items);
        $machine[$type]['fuel'] = $item->getFuel()*$machine[$type]['active'];
        $machine[$type]['range'] = $item->getRange()*$machine[$type]['active'];
        $machine[$type]['personal'] = $item->getPersonal()*$machine[$type]['active'];
        $machine[$type]['people'] = $item->getPeople()*$machine[$type]['active'];
        $machine[$type]['money'] = $item->getMoney()*$machine[$type]['active'];
    }

   // print_r($item->getFuel());
}



$file = 'test.csv';
$heads = ['','active','gas','avia_fuel','wood','kilometers','people','personal','money'];
$total = ['total','active'=>0,'gas'=>0,'avia_fuel'=>0,'wood'=>0,'kilometers'=>0,'people'=>0,'personal'=>0,'money'=>0];

$file_csv = fopen($file, 'w');
fputcsv($file_csv, $heads);
$result = [
    'Moto' => ['active'=>$machine['moto']['active'],'Diesel'=>0,'gas'=>$machine['moto']['fuel'],'avia_fuel'=>0,'wood'=>0,'kilometers'=>$machine['moto']['range'],'people'=>$machine['moto']['people'],'personal'=>$machine['moto']['personal'],'money'=>$machine['moto']['money']],
    'Train' => ['active'=>$machine['train']['active'],'Diesel'=>0,'gas'=>0,'avia_fuel'=>0,'wood'=>$machine['train']['fuel'],'kilometers'=>$machine['train']['range'],'people'=>$machine['train']['people'],'personal'=>$machine['train']['personal'],'money'=>$machine['train']['money']],
    'Track' => ['active'=>$machine['track']['active'],'Diesel'=>$machine['track']['fuel'],'gas'=>0,'avia_fuel'=>0,'wood'=>0,'kilometers'=>$machine['track']['range'],'people'=>$machine['track']['people'],'personal'=>$machine['track']['personal'],'money'=>$machine['track']['money']],
    'Auto' => ['active'=>$machine['auto']['active'],'Diesel'=>0,'gas'=>$machine['auto']['fuel'],'avia_fuel'=>0,'wood'=>0,'kilometers'=>$machine['auto']['range'],'people'=>$machine['auto']['people'],'personal'=>$machine['auto']['personal'],'money'=>$machine['auto']['money']],
    'Helicopter' => ['active'=>$machine['helicopter']['active'],'Diesel'=>0,'gas'=>0,'avia_fuel'=>$machine['helicopter']['fuel'],'wood'=>0,'kilometers'=>$machine['helicopter']['range'],'people'=>$machine['helicopter']['people'],'personal'=>$machine['helicopter']['personal'],'money'=>$machine['helicopter']['money']],
];
print_r($result);
foreach ($result as $key => $info) {
    $total['active'] += $info['active'];
    $total['gas'] += $info['gas'];
    $total['avia_fuel'] += $info['avia_fuel'];
    $total['wood'] += $info['wood'];
    $total['kilometers'] += $info['kilometers'];
    $total['people'] += $info['people'];
    $total['personal'] += $info['personal'];
    $total['money'] += $info['money'];
    fputcsv($file_csv,[$key, $info['active'],$info['gas'],$info['avia_fuel'],$info['wood'],$info['kilometers'],$info['people'],$info['personal'],$info['money']]);
}
fputcsv($file_csv, $total);
fclose($file_csv);
