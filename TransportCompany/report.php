<?php
use TransportCompany\Fabrika;

require_once 'bootstrap.php';
$park = Fabrika::getPark();
$result = $heads = $total = $fuelTypes = [];
//print_r($park);
$parkFuelType = [];
foreach ($park as $type => $items) {
    foreach ($items as $item) {
        /** @var $item TransportCompany\AbstractMachine */
        $fuelType = $item->getFuelType();
        if(!in_array($fuelType, $fuelTypes )) {
            $fuelTypes[] = $fuelType;
        }
        $result[$type]['name'] = $type;
        $result[$type]['active'] = count($items);
        $result[$type]['range'] = $item->getRange()*$result[$type]['active'];


        $result[$type]['personal'] = $item->getPersonal()*$result[$type]['active'];
        $result[$type]['people'] = $item->getPeople()*$result[$type]['active'];
        $result[$type]['money'] = $item->getMoney()*$result[$type]['active'];}
        $result[$type][$fuelType] = $item->getFuel()*$result[$type]['active'];
    // print_r($item->getFuel());
}


$file = 'result.csv';
$heads = array_merge(['active','range','personal','people','money'], $fuelTypes);
$total = array_combine($heads, array_fill(0,count(array_filter($heads)),0));
array_unshift($total,'Total');
array_unshift($heads,'name');

$file_csv = fopen($file, 'w');
fputcsv($file_csv, $heads);
$tmp = array_combine($fuelTypes, array_fill(0,count($fuelTypes),0));
$trueKey = ['name','active','range','personal','people','money','gas','wood','diesel','avia_fuel'];
foreach ($result as $key => $info) {
    $tmpinfo = $info+$tmp;
    ///$tmpinfo[$park[$key->getFuelType]] = 666;
    print_r($parkFuelType);
    echo '<hr/>';print_r($info);
    echo '<hr/>';print_r($tmp);
    echo '<hr/>';
    echo '<hr/>';
    echo '<hr/>';
    echo '<hr/>';
    foreach($heads as $headKey) {
        if (array_key_exists($headKey, $info)) {
            if($headKey != 'name') {

                if(array_key_exists($headKey, $result[$key])) {
                    $total[$headKey] += $info[$headKey];
                }
            }
        }
    }
    $x = 1;
    uksort($tmpinfo, function($a,$b) use ($trueKey) {
        return array_search($a, $trueKey) - array_search($b, $trueKey);
    }

    );
    fputcsv($file_csv,$tmpinfo);
}
fputcsv($file_csv, $total);
fclose($file_csv);

