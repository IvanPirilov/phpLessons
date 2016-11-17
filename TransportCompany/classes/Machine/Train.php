<?php
namespace TransportCompany\Machine;
use TransportCompany\AbstractMachine;
class Train extends AbstractMachine {
    public $fuel = 30;
    protected $range = 250;
    protected $people = 100;
    protected $personal = 15;
    public static $machine = 10;
    protected $money = 15;
    protected $fuelType = 'wood';
}