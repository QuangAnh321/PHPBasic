<?php
    echo date("d"); // day
    echo "-";
    echo date("m"); // month
    echo "-";
    echo date("y"); // year
    
    echo"<br>";
    echo date("h"); // hour
    echo date("i"); // min
    echo date("s"); // sec
    echo date("a"); // am or pm
    echo"<br>";

    date_default_timezone_set("Asia/Ho_Chi_Minh");
    echo date("h:i:sa");


   
?>