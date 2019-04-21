<?php
    // Server array
    $server = array("Host server name" => $_SERVER["SERVER_NAME"], 
    "Host header" => $_SERVER["HTTP_HOST"],
    "Server software" => $_SERVER["SERVER_SOFTWARE"]
);

    echo $server["Host server name"];
    echo "<br>";
    echo $server["Host header"];
    echo "<br>";
    echo $server["Server software"];
    echo "<br>";

    // Client array
    $client = array("Client system info" => $_SERVER["HTTP_USER_AGENT"]);
    echo $client["Client system info"];
?>