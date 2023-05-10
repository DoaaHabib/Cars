<?php

Class Cars{
    
 function gretting(){
     
 }
    function gretting2(){
        
    }
        
}
$the_methods = get_class_methods('Cars');
foreach($the_methods as $the_method){
    echo $the_method . "<br>";
}


?>