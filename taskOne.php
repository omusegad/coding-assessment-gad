<?php 

 require_once('data1.php'); 

 //Task One 
 function  taskOne($person  , $people){
    $teams = [];
    foreach ($people as $item) {
      if($item->isTeam ){
          //print_r($item->members);
          if(in_array($person, $item->members)){
            echo $item->displayName ;
          }
      }
    } 

 }

 taskOne($bob , $people);
 // yes the taskOne function outputs same result as data1.php 

