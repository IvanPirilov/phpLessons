<?php
require_once 'abstract_machine_class.php';
class track extends machine {
    public $toplivo = 20;
    public $range = 500;
    public $people = 15;
    public $personal = 2;
    public static $machine = 80;
    public $activ;
    public $money = 25;
}