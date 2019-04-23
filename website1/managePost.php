<?php
    require("config/database.php");
    

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
        <h1 class="post-title">Manage Post</h1>
        <table class="table">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Created_at</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
            <?php foreach($posts as $post) : ?>
                <?php echo "<tr>"; ?>
                <?php echo "<td>" .$post["post_id"]. "</td>"; ?>
                <?php echo "<td>" .$post["post_title"]. "</td>"; ?>
                <?php echo "<td>" .$post["post_author"]. "</td>"; ?>
                <?php echo "<td>" .$post["created_at"]. "</td>"; ?>
                <td><a class="btn btn-primary" href="editPost.php?id=<?php echo $post["post_id"]; ?>" role="button">Edit</button></td>
                <td><button type="button" class="btn btn-danger">Delete</button></td>
                <?php echo "</tr>"; ?>
            <?php endforeach; ?>
        </table>
    </div>
    <?php include("inc/footer.php"); ?>
