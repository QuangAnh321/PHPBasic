<?php 
    require("config/database.php");

    $msg = "";
    $msgClass = "";

    // Get id
    $id = mysqli_real_escape_string($conn, $_GET["id"]);
    
    // Query statement
    $query ="SELECT * FROM posts where post_id =".$id;

    // Get result
    $result = mysqli_query($conn, $query);

    // Fetch data
    $post = mysqli_fetch_assoc($result);

    if (isset($_POST["submit"])) {
        $title = mysqli_real_escape_string($conn, $_POST["title"]);
        $author = mysqli_real_escape_string($conn, $_POST["author"]);
        $body = mysqli_real_escape_string($conn, $_POST["body"]);

        $updateQuery = "UPDATE posts SET post_title = '$title', post_author = '$author', post_body = '$body' WHERE post_id =".$id;

        if (mysqli_query($conn, $updateQuery)) {
            $msg = "Post edited successfully";
            $msgClass = "alert-success";
        } else {
            $msg = "Error: ". mysqli_error($conn);
            $msgClass= "alert-danger";
        }
    }
?>

<?php include("inc/header.php"); ?>
    <div class="container">
    <h1 class="post-title">Add Post</h1>
        <?php if ($msg != ""): ?>
            <div class="alert <?php echo $msgClass; ?>"> <?php echo $msg; ?> </div> 
        <?php endif ?>
        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
            <div class="form-group">
                <label>Title:</label>
                <input type="text" class="form-control" name="title" value="<?php echo $post["post_title"]; ?>">
            </div>
            <div class="form-group">
                <label>Author:</label>
                <input type="text" class="form-control" name="author" value="<?php echo $post["post_author"]; ?>">
            </div>
            <div class="form-group">
                <label>Content:</label>
                <textarea rows="4" class="form-control" name="body"><?php echo $post["post_body"]; ?></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
<?php include("inc/footer.php"); ?>