<?php
session_start();
 if(isset($_SESSION["username"]))   
  {  
    header("location:welcome.php");  
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/global.css">  
    <link rel="stylesheet" type="text/css" href="css/pikaday.css">
    <link href="css/toastr.scss" rel="stylesheet"/>
    <title>Register</title>
</head>

<body>
  
<nav class="navbar navbar-light" style="background-color: #d1dbda">
<a class="navbar-brand" href="home.html">Home</a>
<form class="form-inline" method="post">
<a class="navbar-brand mr-sm-2" href="login.php">Login</a>
</form>
</nav>

<div class="container ">
<div class="row justify-content-center"> 

<form  class="form-container1"  method="post">
<!-- action="includes/register.includes.php" -->

<div class="form-row">
<h1 class="text-dark">Register </h1>
</div> 

<div class="form-row">
<div class="col-md-6 mb-3">
<label class="text-dark">Name</label>
<input type="text" class="form-control firstname" name="firstname" placeholder="Enter your full name" >
</div>

<div class="col-md-6 mb-3">
<label class="text-dark">Email</label>
<input type="text" class="form-control email" name="email" placeholder="Enter your email address" >
</div>
</div>

<div class="form-row">
<div class="col-md-6 mb-3">
<label class="text-dark">UserName</label>
<input type="text" class="form-control usr" name="usr" placeholder="Provide a Username maximum of 6 characters">
</div>

<div class="col-md-3 mb-3">
<label class="text-dark">Password</label>
<input type="password" class="form-control psr" name="psr" placeholder="Minimum of 6 characters">
</div>

<div class="col-md-3 mb-3">
<label class="text-dark">DateofBirth</label>
<input type="text" class="form-control  dob1" id="dob" name="dob" readonly placeholder="Provide your DOB">
</div>

<div class="col-md-3 mb-3">
<label class="text-dark">Age</label>
<input type="text" class="form-control age" id="age" name="age" placeholder="Age must be atleast 1" readonly>
</div>
</div>

<div class="col-md-12 mb-3">
<button  class="btn btn-success btn-block rounded-pill create" >Create</button>
</div>

</div>
</div>
</form>

<script src="./js/pikaday.js"></script>
<script src="./js/jquery.js"></script>
<script src="./js/agecal.js"></script>
<script src="./js/toastr.js"></script>
<script src="./js/register.js"></script>

</body>
</html>