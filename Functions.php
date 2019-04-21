<?php
    function test() {
        echo "testing<br>";
    }

    test();

    //with param
    function withParam($param) {
        echo "This is the: $param<br>";
    }

    withParam("param");

    function add($num1, $num2) {
        return $num1 + $num2;
    }

    echo "add(1, 2)<br>";

    $number = 5

    // function addFive($number) {
    //     $number += 5;
    // }

    // // passing variable
    // function addTen($number) {
    //     $number += 10;
    // }
 
    // addFive($number);

    // echo "Value";
?>