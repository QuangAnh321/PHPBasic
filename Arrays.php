<?php
    // Normal array
    $anArray = array('one', 'two', 'three');
    // echo $anArray[2];
    // print_r($anArray);
    // var_dump($anArray);

    // Array with key and value
    $motorCycle = array("Sirius" => "Yamaha", "Blade" => "Honda");
    $ids = array(19 => "QA", 69 => "Hieu", 127 => "Linh");
    echo $motorCycle["Sirius"];
    echo "\n";
    echo $ids[19];
    echo "\n";
    $motorCycle["AirBlade"] = "Honda";
    echo $motorCycle["AirBlade"];
    $ids[40] = "Duong";
    echo "\n";
    echo $ids[40];

    $array = array("haha", "huhu", "blabla");

   foreach ($array as $arrays) {
       echo "$arrays<br>";
   }

    //Multi-Demesional array
    
?>