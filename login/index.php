<?php 
session_start();
// you have to start the session before using it 
include("../reg/insert.php");
  if(isset($_POST['submit']))
  {
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];
    $enpass=sha1($passwd);
    $lq = "SELECT * FROM user WHERE email='$email' AND passwd='$enpass'";
    $eql = mysqli_query($conn, $lq);
    $count = mysqli_num_rows($eql);
    if($count==1)
    {
      // Session declaration :-
      $_SESSION['loginstatus'] = 1;
      $_SESSION['email']= $email;
      header('Location:userlogin.php');
    }
    else
    {
      ?>
      <script type="text/javascript">
        alert("Login Failed");
      </script>
      <?php

    }
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
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

<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

<body class="bg">
  <div class="container parent">
    <div class="row align-self-center">
      <div class="col-sm-12 col-md-12 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Log In</h5>
            <form class="form-Login " method="POST">
              <div class="form-label-group">
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="passwd" class="form-control " placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

             
              <button class="btn btn-lg btn-block btn-info text-uppercase"  name="submit" type="submit">Login</button>
              <hr class="my-4">
            

              <button class="btn btn-lg  btn-info btn-block d-block text-uppercase " type="submit"><i class="fab fa-google mr-2"></i>
               <a  class="text-white" href="../reg/index.php"  onclick="window.location.href:file:'../reg/index.php'">Sign up now</a></button>
            
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>