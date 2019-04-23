<?php 
    require("config/database.php");

    $msg = "";
    $msgClass = "";

    if (isset($_POST["submit"])) {
        $title = mysqli_real_escape_string($conn, $_POST["title"]);
        $author = mysqli_real_escape_string($conn, $_POST["author"]);
        $body = mysqli_real_escape_string($conn, $_POST["body"]);

        $query = "INSERT INTO posts(post_title, post_body, post_author) VALUES('$title', '$body', '$author')";

        if (mysqli_query($conn, $query)) {
            $msg = "New post added successfully";
            $msgClass = "alert-success";
        } else {
            $msg = "Error: ". mysqli_error($conn);
            $msg = "alert-danger";
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
                <input type="text" class="form-control" placeholder="Post title" name="title">
            </div>
            <div class="form-group">
                <label>Author:</label>
                <input type="text" class="form-control" placeholder="Post author" name="author">
            </div>
            <div class="form-group">
                <label>Content:</label>
                <textarea rows="4" class="form-control" placeholder="Post body" name="body"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
<?php include("inc/footer.php"); ?>