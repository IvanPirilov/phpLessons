<?php
require_once 'bootstrap.php';
$park = Fabrika::getPark();

$result =[] ;
$f = [0=>'moto',1=>'auto',2=>'train',3=>'track',4=>'helicopter'];
//print_r($park);
for ($i=0; $i<=count($f); $i++) {
    foreach ($park[$f[$i]] as $item) {
        $result[$park[$f[$i]]]['fuel'] += $item->getFuel();
        $result[$park[$f[$i]]]['people'] += $item->getPeople();
        $result[$park[$f[$i]]]['range'] += $item->getRange();
        $result[$park[$f[$i]]]['personal'] += $item->getPersonal();
        $result[$park[$f[$i]]]['money'] += $item->getMoney();
        $result[$park[$f[$i]]]['active'] = count($park[$park[$f[$i]]]);
    }
}
print_r($result);
echo '<hr>';
print_r($park);