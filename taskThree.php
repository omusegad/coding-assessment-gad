<?php 

 require_once('data2.php'); 

 //Task Three
 function  taskThree($c_team){
    $result = [];
    //print_r( (array) $c_team);
    $it = new RecursiveIteratorIterator(new RecursiveArrayIterator($c_team));
    foreach($it as  $value) {
       echo $value, " ";
    }


 }

 taskThree($c_team);
 // yes the taskOne function outputs same result as data1.php 

