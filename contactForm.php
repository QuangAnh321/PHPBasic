<?php 

$msg = "";
$msgClass = "";
    if(filter_has_var(INPUT_POST, "submit")) { 
        // form data 
        $email = htmlspecialchars($_POST["email"]);
        $name = htmlspecialchars($_POST["name"]);
        $message = htmlspecialchars($_POST["message"]);

        if (!empty($email) && !empty($name) && !empty($message)) {
        
            // Check email 
            if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
              $msg = "Please check your email";
              $msgClass = "alert-danger";
            } else {
              $msg = "Your email was sent";
              $msgClass = "alert-success";

              // ToDo: Create database to save feedback
            }
        } else {
            $msg = "Please fill in all the form";
            $msgClass = "alert-danger";
        }
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="contactFormCSS.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li>
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> 
    </ul>
  </div>
</nav>
<!-- end navbar -->
<div class="container">
     <div id="title">
        <h1>Feedback<h1>
     </div>
<?php if ($msg != ""): ?>
     <div class="alert <?php echo $msgClass; ?>"> <?php echo $msg; ?> </div> 
<?php endif ?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	      <div class="form-group">
		      <label>Name:</label>
		      <input type="text" name="name" class="form-control" placeholder="Enter your name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
	      </div>
	      <div class="form-group">
	      	<label>Email:</label>
	      	<input type="text" name="email" class="form-control" placeholder="Enter your email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
	      </div>
	      <div class="form-group">
	      	<label>Message:</label>
	      	<textarea name="message" class="form-control" placeholder="Enter your message"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
	      </div>
	      <br>
	      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
</body>
</html>
