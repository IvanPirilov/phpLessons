<?php
class Fabrika  {
    
    protected static $park= [];
    protected static $availableTypes = [
        'Moto', 'Train', 'Track', 'Auto', 'Helicopter'
    ];
    
    protected static function generatePark()
    {
        foreach (self::$availableTypes as $type) {
            for($i=1;$i<=rand(1, $type::$machine);$i++) {
                self::$park[strtolower($type)][] =  new $type();

            }
        }
    }
    public static function getPark() {
        if (empty(self::$park)) {
            self::generatePark();
        }
        return self::$park;
    }

}






