<?php
namespace TransportCompany\Machine;
use TransportCompany\AbstractMachine;

class Helicopter extends AbstractMachine {
    public $fuel = 2;
    protected $range = 300;
    protected $people = 8;
    protected $personal = 2;
    public static $machine = 10;
    protected $money = 50;
    protected $fuelType = 'avia_fuel';
}