<?php
    // check if $_GET is null
    if (isset($_GET["name"])) {
        //echo $_GET["name"];
        print_r($_GET);
    }

    if (isset($_POST["name"]) && isset($_REQUEST["email"])) {
        echo $_POST["name"];
        //print_r($_POST);
        echo $_POST["email"];
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <form method="POST" action="getPost.php">
        <div>
            <label>Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label>Email</label><br>
            <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>
</body>
</html>