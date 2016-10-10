<?php

require_once 'fabrika.php';
$track = new track;
$moto = new moto;
$train = new train;
$helicopter = new helicopter;
$auto = new auto;
$moto->activ = rand(1, moto::$machine);
$track->activ = rand(1, track::$machine);
$train->activ = rand(1, train::$machine);
$helicopter->activ = rand(1, helicopter::$machine);
$auto->activ = rand(1, auto::$machine);
$result =[];
$result['track']['fuel'] = $track->toplivo;
$result['track']['range'] = $track->range;
$result['track']['passenger'] = $track->people;
$result['track']['personal'] = $track->personal;
$result['track']['money'] = $track->money*$track->activ*$track->people." dolors";
$result['track']['active machine'] = $track->activ;
$result['moto']['fuel'] = $moto->toplivo;
$result['moto']['range'] = $moto->range;
$result['moto']['passenger'] = $moto->people;
$result['moto']['personal'] = $moto->personal;
$result['moto']['money'] = $moto->money*$moto->activ*$track->people." dolors";
$result['moto']['active machine'] = $moto->activ;
$result['train']['fuel'] = $train->toplivo;
$result['train']['range'] = $train->range;
$result['train']['passenger'] = $train->people;
$result['train']['personal'] = $train->personal;
$result['train']['money'] = $train->money*$train->activ*$track->people." dolors";
$result['train']['active machine'] = $moto->activ;
$result['helicopter']['fuel'] = $helicopter->toplivo;
$result['helicopter']['range'] = $helicopter->range;
$result['helicopter']['passenger'] = $helicopter->people;
$result['helicopter']['personal'] = $helicopter->personal;
$result['helicopter']['money'] = $helicopter->money*$helicopter->activ*$track->people." dolors";
$result['helicopter']['active machine'] = $helicopter->activ;
$result['auto']['fuel'] = $auto->toplivo;
$result['auto']['range'] = $auto->range;
$result['auto']['passenger'] = $auto->people;
$result['auto']['personal'] = $auto->personal;
$result['auto']['money'] = $auto->money*$auto->activ*$track->people." dolors";
$result['auto']['active machine'] = $auto->activ;

$content = fopen('result.csv', 'r+');
foreach ($result as $fields) {
    fputcsv($content, $fields);
}
$re = fgetcsv($content);
print_r($result);



