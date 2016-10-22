<?php
//namespace TransportCompany;

abstract class AbstractMachine {
    protected $range;
    protected $people;
    protected static $machine;
    protected $personal;
    protected $money;
    protected $fuel;
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

}