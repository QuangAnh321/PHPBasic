<?php
    session_start();
    
    $message = $_SESSION["message"];
    $email = $_SESSION["email"];

    if ($_SESSION["name"] != "") {
        $name = $_SESSION["name"];
    } else {
        $name = "Guest";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sessions2</title>
</head>
<body>
    <h5> Thank you: <?php echo $name; ?> !</h5>
    <h5> You have subcribe to our site with the email: <?php echo $email; ?> !</h5>
    <a href="sessions.php">Return to sessions</a>
</body>
</html>