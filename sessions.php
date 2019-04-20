<?php 
    if (isset($_POST["submit"])) {
       session_start();
       $_SESSION["name"] = htmlentities($_POST["name"]);
       $_SESSION["message"] = htmlentities($_POST["message"]);
       $_SESSION["email"] = htmlentities($_POST["email"]);
       header("location: sessions2.php");
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sessions</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <label>Name:</label>
        <input type="text" placeholder="Enter your name here" name="name">
        <br>
        <label>Email:</label>
        <input type="text" placeholder="Enter your email here" name="email">
        <br>
        <label>Message:</label>
        <textarea placeholder="Your message" name="message"></textarea>
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>