<?php

//class Point
//{
//    public static $counter = 0;
////
////    public $x = null;
////    public $y = null;
////    public $array = [];
//
//    public function __construct()
////    public function __construct($x,$y,$array)
//    {
//        $parameters = func_get_args();
//        print_r($parameters);
////        foreach (func_get_args() as $name => $value) {
////            echo $name;
////        }
//
////        $this->x = $x;
////        $this->y = $y;
////        $this ->array = $array;
////        echo ( ++self::$counter ); // счетчик созданных объектов этого класса
//    }
//}
//
//$array = [];
//$point1 = new Point(["x"=>1,"y"=>0]);
////$point2 = new Point(3,4);
////$point3 = new Point(0,5);
////print_r($point1);

class Point
{
    public $x, $y;
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }
}

class Distance
{
    public static $min;
    public $pointsArray;

    public function __construct($pointsArray) {
        $this->pointsArray = $pointsArray;
        self::$min = $this->calculate();
    }

    public function calculate()
    {
            $array = $this->pointsArray;
            $distance = [];
            for ($i = 0; $i < count($array); $i++)
            {
                for ($j = $i+1; $j < count($array); $j++){
                    $distanceBetweenPoints = sqrt(($array[$i]->x+$array[$j]->x)^2
                                            + ($array[$i]->y+$array[$j]->y)^2);
                    $distance[] = $distanceBetweenPoints;
                }
            }
            echo number_format(min($distance),2);
    }

}

$point1 = new Point(1,1);
$point2 = new Point(0,1);
$point3 = new Point(2,3);

$pointsArray = [$point1,$point3,$point3];

$distance = new Distance($pointsArray);



