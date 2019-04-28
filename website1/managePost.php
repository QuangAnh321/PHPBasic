<?php
    require("config/database.php");
    
    
    // Query statement
    $getPostQuery ="SELECT * FROM posts";

    // Get result
    $result = mysqli_query($conn, $getPostQuery);

    // Fetch data
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if(isset($_POST["submit"])) {
        $deleteQuery = "DELETE FROM posts WHERE post_id=".$_POST["id"];
        mysqli_query($conn, $deleteQuery);
        header("Location: managePost.php");
    }
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
                <td>
                <button class="btn btn-danger" type="submit" onclick="showModal(<?php echo $post["post_id"]; ?>)">Delete
                </td>
                <?php echo "</tr>"; ?>
            <?php endforeach; ?>
        </table>
    </div>
    <dialog id="myDialog">
            <p>Delete this post ?</p>
            <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
                <input type="hidden" id="idField" value="" name="id">
                <button class="btn btn-danger" type="submit" name="submit">Delete</button>
                <button class="btn btn-light" onclick="hideModal()">Cancel</button>
            </form>
    </dialog>
   
    <script>
        function showModal(id) { 
         document.getElementById("myDialog").showModal();
         document.getElementById("idField").value = id;
        } 
        function hideModal() { 
         document.getElementById("myDialog").close(); 
        } 
    </script>
    <?php include("inc/footer.php"); ?>
