<?php
    require ("config/database.php");
    

    // Query statement
    $query ="SELECT * FROM posts";

    // Get result
    $result = mysqli_query($conn, $query);

    // Fetch data
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // var_dump($posts);

    // Free result
    mysqli_free_result($posts);

    // Close connection
    mysqli_close($conn);
?>

<?php include("inc/header.php"); ?>
    <div class="container">
        <h1>Posts</h1>
            <div class="card-deck">
                <?php foreach($posts as $post) : ?>
                    <div class="card bg-light">
                        <h5 class="card-title"><?php echo $post["post_title"]; ?></h5>
                        <small class="card-subtitle text-muted">created on <?php echo $post["created_at"]; ?> by
                        <?php echo $post["post_author"]; ?></small>
                        <p class="card-text"><?php echo $post["post_body"]; ?></p>
                        <a class="card-link" href="post.php?id=<?php echo $post["post_id"]; ?>"> Read more</a>
                    </div>
                <?php endforeach; ?>
            </div>
    </div>
    <?php include("inc/footer.php"); ?>
