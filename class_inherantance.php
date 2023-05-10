<?php 
class Cars {
    var $wheels = 4;
    function gretting(){
        return "hello student";
    }
}
$bmw= new Cars();
class Trucks extends Cars{
    
}
$tacoma = new Trucks();
echo $tacoma->wheels;

?>