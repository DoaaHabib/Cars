<?php
class Cars {
    static $wheel_count =4;
    static $door_count = 4 ; 
    static $seat_count = 2;
    
    static function car_detail(){
        
        echo Cars::$wheel_count;
        echo Cars::$door_count;
        echo Cars::$seat_count;
    }
}
$bmw= new Cars();
//echo $bmw->wheel_count;
//echo $bmw->door_count;
//echo $bmw->seat_count;
Cars::car_detail();

?>