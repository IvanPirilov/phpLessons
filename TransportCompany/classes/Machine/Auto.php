<?php
namespace TransportCompany\Machine;
use TransportCompany\AbstractMachine;

class Auto extends AbstractMachine
{
    public $fuel = 10;
    protected $range = 250;
    protected $people = 4;
    protected $personal = 1;
    public static $machine = 30;
    protected $money = 30;
    protected $fuelType = 'gas';
}

