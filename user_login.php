<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <title>Sign in</title>
</head>

<body>
  <div class="container">
    <div class="clearfix"></div>
    <div class="main">
      <p class="heading" align="center">Login</p>

      <form method="post">
        
        <div class="form-group">
          <label for="username">User Name</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>

        <select class="form-select" aria-label="Default select" name="type">
          <option selected>Select Account Option</option>
          <option value="doctor">Doctor</option>
          <option value="patient">Patient</option>
        </select>

        <button type="submit" name="login" class="btn btn-primary button">Login</button>
      </form>
      <div class="further_box">
        <span>
          Don’t have an account?
        </span>
        <a href="register.php">Register</a>
      </div>
    </div>
    
     
      <div id="failure">
        <h2>User Logged in Successfully!</h2>        
      </div>
  </div>
</body>

</html>

<?php 
  require 'connection.php';
  if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $validate_query = "SELECT * from users where username='$username' and password ='$password' ";
    $result = mysqli_query($con, $validate_query);
    $count = mysqli_num_rows($result) or die(mysqli_error($con)) ;
    
    if($count == 1){
      echo "<script>window.location='user_listing.php'</script>";
    }
    else{
      echo "ERROR: "+mysqli_error($con);
      ?>
      <style type="text/css">
        #failure{display: block;}
      </style>
      <?php 
    }   
  }
 ?>