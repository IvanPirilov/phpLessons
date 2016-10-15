<?php
require_once 'bootstrap.php';

$Track = new Track;
$Fabrika = new Fabrika;
$Moto = new Moto;
$Train = new Train;
$Helicopter = new Helicopter;
$Auto = new Auto;
$Fabrika->getPark();
/*
$result =[];
$result['track']['fuel'] = $Track->toplivo;
$result['track']['range'] = $Track->range;
$result['track']['passenger'] = $Track->people;
$result['track']['personal'] = $Track->personal;
$result['track']['money'] = $Track->money*$Track->activ*$Track->people." dolors";
$result['track']['active machine'] = $Track->activ;
$result['moto']['fuel'] = $Moto->toplivo;
$result['moto']['range'] = $Moto->range;
$result['moto']['passenger'] = $Moto->people;
$result['moto']['personal'] = $Moto->personal;
$result['moto']['money'] = $Moto->money*$Moto->activ*$Track->people." dolors";
$result['moto']['active machine'] = $Moto->activ;
$result['train']['fuel'] = $Train->toplivo;
$result['train']['range'] = $Train->range;
$result['train']['passenger'] = $Train->people;
$result['train']['personal'] = $Train->personal;
$result['train']['money'] = $Train->money*$Train->activ*$Track->people." dolors";
$result['train']['active machine'] = $Moto->activ;
$result['helicopter']['fuel'] = $Helicopter->toplivo;
$result['helicopter']['range'] = $Helicopter->range;
$result['helicopter']['passenger'] = $Helicopter->people;
$result['helicopter']['personal'] = $Helicopter->personal;
$result['helicopter']['money'] = $Helicopter->money*$Helicopter->activ*$Track->people." dolors";
$result['helicopter']['active machine'] = $Helicopter->activ;
$result['auto']['fuel'] = $Auto->toplivo;
$result['auto']['range'] = $Auto->range;
$result['auto']['passenger'] = $Auto->people;
$result['auto']['personal'] = $Auto->personal;
$result['auto']['money'] = $Auto->money*$Auto->activ*$Track->people." dolors";
$result['auto']['active machine'] = $Auto->activ;

print_r($result);
*/
$Moto->activ = count(Fabrika::$active['moto']);
$Track->activ = count(Fabrika::$active['track']);
$Train->activ = count(Fabrika::$active['train']);
$Helicopter->activ = count(Fabrika::$active['helicopter']);
$Auto->activ = count(Fabrika::$active['auto']);
print_r(Fabrika::$active);
echo '<hr>';
print_r(Fabrika::$park);
