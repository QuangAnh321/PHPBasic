<?php
    $num = 12;
    //Check if equal only (not check for data type)
    if ($num == 10) {
        echo "It is 10<br>";
    } else if ($num == 11) {
        echo "It is 11";
    } else {
        echo "It is not 10 or 11";
    }

    echo "<br>";

    $numString = "10";
    // Check if equal and the same data type
    var_dump($num === $numString);

    echo "<br>";

    //switch case

    $color = "purple";

    switch($color) {
            case "red":
            echo "You like red";
            break;

            case "green":
            echo "You like green";
            break;

            case "blue":
            echo "You like blue";
            break;

            default:
            echo "Another color";
            break;
    }
?>