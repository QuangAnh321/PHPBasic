<?php
    require ("config/database.php");
    

    // Query statement
    $query ="SELECT * FROM posts";

    // Get result
    $result = mysqli_query($conn, $query);

    // Fetch data
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    var_dump($posts);

    // Free result
    mysqli_free_result($posts);

    // Close connection
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>
<body>
    
</body>
</html>