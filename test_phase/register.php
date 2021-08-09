<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Register</title>
</head>

<body>

  <div class="container">
    <div class="clearfix"></div>
    <div class="main">
      <p class="heading" align="center">Register</p>

      <form method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required="yes" pattern="[a-zA-Z ]+" minlength="3" maxlength="100" title="Must be at least 3 to 100 characters in length and only consist of alphabets">
        </div>
        <div class="form-group">
          <label for="username">User Name</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required="yes" pattern="[a-zA-Z0-9]+"  minlength="8" maxlength="100" title="Must be 8 to 100 characters in length, should contain alphabets and alphanumeric characters with no special characters and space">
        </div>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="yes" pattern="^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" required="yes" placeholder="Password" minlength="8" maxlength="20" title="Must be 8 to 20 characters in length">
        </div>
        <button type="submit" name="submit" class="btn btn-primary button">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
      </form>
      <div class="further_box">
        <a href="user_login.php">Login</a>
      </div>
    </div>
    
      <div id="success">
        <h2>User Registered Successfully!</h2>        
      </div>
      <div id="failure">
        <h2>User Already Exists!</h2>        
      </div>
  </div>
     
</body>

</html>



<?php 
      require 'connection.php';
  
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $validate_query = "SELECT * from users where username='$username'";
    $result = mysqli_query($con, $validate_query);
    $count = mysqli_num_rows($result);

    if($count==0){
      $insert = "INSERT into users(name, username, email, password) values('$name', '$username', '$email', '$password')";
      mysqli_query($con, $insert);
      ?>
      <style type="text/css">
          #success{display: block;}
      </style>
      <?php 
    }
    else{?>
      <style type="text/css">
          #failure{display: block;}
      </style>
      <?php
    }
  }

 ?>