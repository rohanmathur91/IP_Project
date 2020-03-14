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
	<link href="https://cloudfront.fitnessblender.com/assets/css/styles-47573b9306.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<style type="text/css">
  body, html {
  height: 100%;
  margin: 0;
}
 .bg {
  /* The image used */
  background-image: url("useraccount.jpg");
  

  /* Full height */
  height: 125%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
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
					<li><a href="../workout/videos.php">Workout Videos</a></li>
					<li><a>Calculators</a>
						<ul>
                          <li><a href="../workout/bmi.php">BMI Calculator</a></li>
                          <li><a href="https://www.mytecbits.com/tools/medical/bfpcalculator">Fat Score</a></li>
                        </ul>
                   </li>
					<li><a href="../diet/">Meal Plans</a></li>
					<li><a href="../products/">Products</a></li>
					<li><a href="feedback.php">Feedback</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
	</div>
	</nav>
	<div class="bg"></div>
	<footer id="footer" class="site__footer" role="contentinfo">
        <div class="container">
             <h2 style="color: white; padding-right: 30px"><a href="../index.php" onclick="logout.php">Fitness Services</a>
                <p>WORKOUT COMPLETE<sup>™</sup></p>
            </h2>
         

            <nav class="footer__nav alt-nav">
                <ul style="padding-left: 50px">
                    <li><a class="demi" >Workout &amp; Programs</a></li>
                    <li><a href="../workout/videos.php">Workout Videos</a></li>
                    <li><a href="../workout/bmi.php">BMI Calculator</a></li>
                    
                </ul>
                <ul>
                    <li><a class="demi" href="/healthy-living">Healthy Living</a></li>
                    <li><a href="../diet">Meal Plans</a></li>
                    <li><a href="../products">Products</a></li>
            
                    
                </ul>
                <ul>
                   
                    <li><a class="demi" href="../about">About Us</a></li>
                    
                    <li><a class="demi" href="../contact">Contact Us</a></li>
                    <li><a class="demi" href="feedback.php">Feedback</a></li>
                    
                </ul>
            </nav>
        </div>

        <div class="container">
            <div class="end">
                <p>Copyright &copy; 2019 Fitness Services. All rights reserved. <a>Terms and Conditions</a> <a >Privacy Policy</a></p>
                <ul class="nav-smicons footer-smicons">
                <li class="facebook-smi"><a href="https://www.facebook.com/shubhamchavan1905" target="_blank"><span class="iconfont-facebook"></span><span class="sr-only">Facebook</span></a></li>
                  <li class="instagram-smi"><a href="https://instagram.com/rohanm__10?igshid=qopamaewf2ux" target="_blank"><span class="iconfont-instagram"></span><span class="sr-only">Instagram</span></a></li>
                 </ul>
            </div>
        </div>
    </footer>

  </body>
  </html>



  

</body>
</html>


