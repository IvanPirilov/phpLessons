<?php
class Fabrika  {
    
    public static $park= [];
    public static $active= [];

    protected static $availableTypes = [
        
    ];
    
    function generatePark()
    {
        for($i=1,$l=1;$i<=Moto::$machine;$l++,$i++) {
            $Moto = new Moto();
            $Train = new Train();
            $Track = new Track();
            $Auto = new Auto();
            $Helicopter = new Helicopter();
            self::$active['moto'][] = $Moto;
            self::$active['train'][] = $Train;
            self::$active['track'][] = $Track;
            self::$active['auto'][] = $Auto;
            self::$active['helicopter'][] = $Helicopter;
        }
    }
    function getPark() {
        $Moto = new Moto();
        $Train = new Train();
        $Track = new Track();
        $Auto = new Auto();
        $Helicopter = new Helicopter();
        for($i=1,$l=1;$i<=rand(1, $Moto::$machine);$l++,$i++) {
            $Moto1 = new Moto();
            self::$active['moto'][] = $Moto1;

        }
        for($i=1,$l=1;$i<=rand(1, $Train::$machine);$l++,$i++) {
            $Train1 = new Train();
            self::$active['train'][] = $Train1;

        }
        for($i=1,$l=1;$i<=rand(1, $Track::$machine);$l++,$i++) {
            $Track1 = new Track();
            self::$active['track'][] = $Track1;

        }
        for($i=1,$l=1;$i<=rand(1, $Auto::$machine);$l++,$i++) {
            $Auto1 = new Auto();
            self::$active['auto'][] = $Auto1;

        }
        for($i=1,$l=1;$i<=rand(1, $Helicopter::$machine);$l++,$i++) {
            $Helicopter1 = new Helicopter();
            self::$active['helicopter'][] = $Helicopter1;

        }
        foreach (self::$active as $key => $value) {
            self::$park[$key]['fuel'] = $key[0]{'toplivo'};
            self::$park[$key]['range'] = $key[0]['range'];
            self::$park[$key]['passenger'] = $key[0]['people'];
            self::$park[$key]['personal'] = $key[0]['personal'];
            self::$park[$key]['money'] = $key[0]['money']*count($value)*$key[0]['people']." dolors";
            self::$park[$key]['active machine'] = count($value);

        }
    }

}






