<?php
require_once 'abstract_machine_class.php';
class helicopter extends machine {
    public $toplivo = 2;
    public $range = 300;
    public $people = 8;
    public $personal = 2;
    public static $machine = 10;
    public $money = 50;
    public $activ;
}