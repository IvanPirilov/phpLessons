<?php
namespace TransportCompany\Machine;
use TransportCompany\AbstractMachine;
class Track extends AbstractMachine {
    public $fuel = 20;
    protected $range = 500;
    protected $people = 15;
    protected $personal = 2;
    public static $machine = 80;
    protected $money = 25;
    protected $fuelType = 'diesel';
}