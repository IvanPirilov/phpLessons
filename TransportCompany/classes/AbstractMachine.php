<?php
//namespace TransportCompany;

abstract class AbstractMachine {
    /*public static $report = [];
    function __construct() {
        $report[get_class($this)][$this->range] = $this->range;
        $report[get_class($this)][$this->people] = $this->people;
        $report[get_class($this)][$this->machine] = $this->machine;
        $report[get_class($this)][$this->personal] = $this->personal;
        $report[get_class($this)][$this->money] = $this->money*$this->people*$this->activ;
        $report[get_class($this)][$this->toplivo] = $this->toplivo;
    }
*/
    public $range;
    public $people;
    public static $machine;
    public $personal;
    public $money;
    public $toplivo;
    public $activ;
}