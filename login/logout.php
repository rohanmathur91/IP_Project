<?php 
session_start();
session_destroy(); // it will empty the session array
// after destroying the session send it to the home page
header('Location:../index.php');
?>
