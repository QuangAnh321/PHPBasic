<?php 
    require("config/database.php");

    $msg = "";
    $msgClass = "";

    if (isset($_POST["submit"]) && isset($_FILES['image'])) {
        $title = mysqli_real_escape_string($conn, $_POST["title"]);
        $author = mysqli_real_escape_string($conn, $_POST["author"]);
        $body = mysqli_real_escape_string($conn, $_POST["body"]);

        $file_name = $_FILES['image']['name'];
        $file_size =$_FILES['image']['size'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];
        $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
        
        $extensions= array("jpeg","jpg","png");
      
 
        if(in_array($file_ext,$extensions)=== false){
            echo "extension not allowed";
        } else if ($file_size > 2097152) {
            echo "File size must be lower than 2 MB";
        } else {
            $path = "photo/";
            $localPath = $path.$file_name;
            if (is_dir($path)) {
                @mkdir($path, 0777, true);
            }
            move_uploaded_file($file_tmp, $localPath);
            $query = "INSERT INTO posts(post_title, post_body, post_author, image_dir) VALUES('$title', '$body', '$author', '$localPath')";
            if (mysqli_query($conn, $query)) {
                $msg = "New post added successfully";
                $msgClass = "alert-success";
                echo $localPath;
            } else {
                $msg = "Error: ". mysqli_error($conn);
                $msg = "alert-danger";
            }
        }
    }
?>

<?php include("inc/header.php"); ?>
    <div class="container">
    <h1 class="post-title">Add Post</h1>
        <?php if ($msg != ""): ?>
            <div class="alert <?php echo $msgClass; ?>"> <?php echo $msg; ?> </div> 
        <?php endif ?>
        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
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
            <div class="form-group">
                <label>File:</label>
                <input type="file" class="form-control-file" name="image">
            </div>
            
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
<?php include("inc/footer.php"); ?>