<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Filter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <input type="text" name="data">
        <button type="submit">submit</button>
    </form>
</body>
</html>

<?php   
    // // Check for posted data
    // if (filter_has_var(INPUT_POST, "data")) {
    //     echo "Data found";
    // } else {
    //     echo "data is empty";
    // }

    // Validate for specific purpose e.g email
    // has_var: check if variable exist
    if (filter_has_var(INPUT_POST, "data")) {
        $email = $_POST["data"];
        // Remove illegal email characters
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email."<br>";

        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email is valid";
        } else {
            echo "Email is not valid";
        }

        // //Check if email is valid
        // if(filter_input(INPUT_POST, "data", FILTER_VALIDATE_EMAIL)) {
        //     echo "Email is valid";
        // } else {
        //     echo "Email is not valid";
        // }

        

    }
?>