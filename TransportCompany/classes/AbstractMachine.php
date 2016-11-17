<?php
namespace TransportCompany;
/*
 * <?php$result[$type][$fuelType] = $item->getFuel()*$result[$type]['active'];
require_once 'bootstrap.php';
$park = Fabrika::getPark();
$result =[] ;
//print_r($park);
    foreach ($park as $type => $item) {
        $result = $moto->getPeople();
    }

print_r($result);
echo '<hr>';
print_r($park);
 * */
 

abstract class AbstractMachine {
    protected $range;
    protected $people;
    protected static $machine;
    protected $personal;
    protected $money;
    protected $fuel;
    protected $fuelType;
    public function getRange() {
        return $this->range;
    }
    public function getFuel() {
        return $this->fuel;
    }
    public function getPersonal() {
        return $this->personal;
    }
    public function getMoney() {
        return $this->money;
    }
    public function getPeople() {
        return $this->people;
    }
    public function getFuelType() {
        return $this->fuelType;
    }

}