<?php
require_once 'abstract_machine_class.php';
require_once 'auto_class.php';
require_once 'helecopter_class.php';
require_once 'track_class.php';
require_once 'train_class.php';
require_once 'moto_class.php';
$track = new track;
$moto = new moto;
$train = new train;
$helicopter = new helicopter;
$auto = new auto;

class fabrika  {
    public static $park= [];
    public $name = 'class';
    function __construct()
    {
        for($i=1,$l=1;$i<=moto::$machine;$l++,$i++) {
            $l = new moto();
            $q = new train();
            $w = new track();
            $e = new auto();
            $r = new helicopter();
            self::$park['moto'][] = $l;
            self::$park['train'][] = $q;
            self::$park['track'][] = $w;
            self::$park['auto'][] = $e;
            self::$park['helicopter'][] = $r;
        }
    }

}

$fabrika = new fabrika();
$moto->activ = count(fabrika::$park['moto']);
$track->activ = count(fabrika::$park['track']);
$train->activ = count(fabrika::$park['train']);
$helicopter->activ = count(fabrika::$park['helicopter']);
$auto->activ = count(fabrika::$park['auto']);
echo '<hr>';
//print_r(fabrika::$park);
echo '<hr>';

