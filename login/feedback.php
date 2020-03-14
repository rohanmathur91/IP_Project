<?php
session_start();
if($_SESSION['loginstatus']==1)
{

}
else
{
	header('Location:logout.php');
}

include("../reg/insert.php");
$s_email = $_SESSION['email']; 
$loginstatus = $_SESSION['loginstatus'];

// TO fetch data form table
$balance_query = "SELECT * FROM user WHERE email='$s_email'";
$balance_run = mysqli_query($conn, $balance_query);

// user is an arry , as the funciton returns an array

$user=mysqli_fetch_assoc($balance_run);

include("finsert.php");
if(isset($_POST['feedbackbtn'])) {
  $email = $s_email;
  $feedback = $_POST['feedback'];

    $q = " INSERT INTO feed (email,feedback) VALUES('$email','$feedback')";


  
    $iq = mysqli_query($conn, $q);
  
  
  //  if query runs then returns 1 or else 0 so iq is either 0 or 1

  if ($iq) 
  {
    ?>
        <script type="text/javascript">
          alert("Feedback Sent Successfully!")
          window.location="userlogin.php"
          // or use header tag in php to redirect 
        </script>
        <?php 
    }
    else
    {
      ?>
      <script type="text/javascript">
        alert("Feedback Sending Failed")
        /*window.location="../"*/
      </script>
      <?php
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Account</title>
	<!-- Meta encoding -->
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width,initial scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">

	<!-- BOOTSTRAP CDN -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- BOOTSTRAP CDN END -->

	<!-- icon code -->
	<link rel="icon" type="image/jpeg" href="">
	<link rel="stylesheet" type="text/css" href="../css/style.css">


</head>
<body>
	<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header"> 
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mytarget">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" style="color:white;"href="#">Welcome <?php echo $user['username'] ?></a>
		</div> 
		<div>
			<div class="collapse navbar-collapse" id="mytarget">
				<ul class="nav navbar-nav navbar-right" style="color: white;">
					<li><a href="../workout/videos.php">Workout Videos</a>
					<li><a>Calculators</a>
                        <ul>
                          <li><a href="../workout/bmi.php">BMI Calculator</a></li>
                          <li><a href="">Fat Score</a></li>
                        </ul>
					</li>
					<li><a href="../diet">Meal Plans</a></li>
					<li><a href="../products/">Products</a></li>
					<li><a href="#">Feedback</li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
	</div>
	</nav>
	<div class="container">
		<form method="POST">
      <div class="row">
      	<div class="col-sm-8 col-sm-offset-2 form-group">
      		<h3>Your Feedback / Queries</h3>
      		<!-- rows cols so we can specify how many to display default -->
      		<!-- style resize to bound the resize only vertical and not horzontal -->
      		<textarea class="form-control" name="feedback" rows="6" style="resize: vertical;" required="required"></textarea>
      	</div>
      </div>

      <div class="row">
      	<div class="col-sm-8 col-sm-offset-2 form-group">
      		<input type="submit" class="form-control btn btn-primary" name="feedbackbtn"  value="SUBMIT FEEDBACK">
      	</div>
      </div>
</form>
    </div>
    <!-- Feedback Section Ends -->
  

	<!-- Tabs End -->
</body>
</html>	