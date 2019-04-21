<?php
    //For loop
    for ($i = 1; $i < 10; $i++) {
        echo "Number $i";
        echo "<br>";
    }

    echo "<br>";

    //While loop
    $counter = 0;
    while ($counter < 5) {
        echo $counter;
        echo "\n";
        $counter++;
    }

    echo "<br><br>";

    //Do ... while loop
    $counter2 = 0;
    do {
        echo $counter2;
        echo "\n";
        $counter2++;
    } while ($counter2 < 5);

    echo "<br><br>";

    //Foreach loop
    $ProgrammingLanguages = array("PHP", "Java", "C#", "Javascript");
    foreach ($ProgrammingLanguages as $language) {
        echo $language;
        echo "\n";
    }

    echo "<br><br>";

    //Foreach loop with associative array
    $ManyLaptop = array("Macbook" => "Apple", "XPS" => "Dell", "Thinkpad" => "Lenovo");
    foreach ($ManyLaptop as $Alaptop => $brand) {
        echo $Alaptop . ": " . $brand;
        echo "<br>";
    }
?>