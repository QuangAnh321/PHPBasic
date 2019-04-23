<?php
    require("config/database.php");
    
    // Get id
    $id = mysqli_real_escape_string($conn, $_GET["id"]);
    
    // Query statement
    $query ="SELECT * FROM posts where post_id =".$id;

    // Get result
    $result = mysqli_query($conn, $query);

    // Fetch data
    $post = mysqli_fetch_assoc($result);
    // var_dump($posts);

    // Free result
    mysqli_free_result($post);

    // Close connection
    mysqli_close($conn);
?>

<?php include("inc/header.php"); ?>
    <div class="container">
        <h1 class="card-title"><?php echo $post["post_title"]; ?></h1>
        <small class="card-subtitle text-muted">created on <?php echo $post["created_at"]; ?> by
        <?php echo $post["post_author"]; ?></small>
        <p class="card-text"><?php echo $post["post_body"]; ?></p>
    </div>
<?php include("inc/footer.php"); ?>