<?php

include("insert.php");

//  this post should be empty after its work for that we have to redirect 
// it to a new prompt , may be the same page but redirection is important
// to empty our post, or it will ask for resubmission which will result in
// multiple entires in the database

$flag = 0;

if(isset($_POST['submit'])) {

  $username = $_POST['username'];
  $email = $_POST['email'];
  $passwd = $_POST['passwd'];
  $cpasswd = $_POST['cpasswd'];
  $enpass = sha1($passwd);
  
 
  //  check for password

 if($passwd!=$cpasswd)
  {
    $flag = 1;
    ?>
    <script type="text/javascript">
      alert("Passwords DO NOT Match ");
      window.location="../reg/";
    </script>
    <?php
  }
  if(strlen($passwd)<=5)
  {
    $flag = 1;
    ?>
    <script type="text/javascript">
      alert("Password should contain atleast six characters.");
      window.location="../reg/";
    </script>
    <?php
  }

  // Email validation in database

  $ev = "SELECT * FROM user WHERE email = '$email' ";
  $eq = mysqli_query($conn, $ev);
  $e_count = mysqli_num_rows($eq);
  if($e_count>0)
  {
    $flag = 1;
    ?>
    <script type="text/javascript">
      alert("Email Already Exists");
      window.location="../reg/";
    </script>
    <?php

  }

  $q = " INSERT INTO user (username,email,passwd) VALUES('$username','$email','$enpass')";

  if($flag==0)
  {
    $iq = mysqli_query($conn, $q);
  }
  
  //  if query runs then returns 1 or else 0 so iq is either 0 or 1

  if ($iq) 
  {
    ?>
        <script type="text/javascript">
          alert("Registered !")
          window.location="../"
          // or use header tag in php to redirect 
        </script>
        <?php 
    }
    else
    {
      ?>
      <script type="text/javascript">
        alert("Registration Failed")
        /*window.location="../"*/
      </script>
      <?php
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/signup.css">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style type="text/css">
 .bg {
  height: 100vh;
  background-image: url("../images/bg.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}
  </style>
</head>
<body class="bg">
   <div class="container">
    <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-5 mx-auto">
        <div class="card card-signin flex-row my-5">
          
          <div class="card-body">
            <h5 class="card-title text-center">Register</h5>
            <form class="form-signin"  method="POST">
              <div class="form-label-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                <label for="inputUsername">Username</label>
              </div>

              <div class="form-label-group">
                <input type="email" name="email" class="form-control" placeholder="Email address" required>
                <label for="inputEmail">Email address</label>
              </div>
              
              <hr>

              <div class="form-label-group">
                <input type="password" name="passwd" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>
              
              <div class="form-label-group">
                <input type="password" name="cpasswd" class="form-control" placeholder="Password" required>
                <label for="inputConfirmPassword">Confirm password</label>
              </div>

              <button  class="btn btn-block btn-lg btn-info text-uppercase" type="submit" name="submit">Register</button>
              <button class="btn btn-lg btn-info btn-block text-uppercase" >
                <a class=" text-white" href="../login/index.php" onclick="window.location.href:'../login/index.php'">Login</a></button>
              <hr class="my-4">
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>


