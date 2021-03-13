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
    <link href="css/toastr.scss" rel="stylesheet"/>
    <title>OOPS Login</title>
</head>

<body>

<nav class="navbar navbar-light" style="background-color: #d1dbda">
<a class="navbar-brand" href="home.html">Home</a>
<form class="form-inline">
<a class="btn btn-warning my-2 my-sm-0 rounded-pill" href="register.php" role="button">Sign up</a>
</form>
</nav>

<div class="container ">
<div class="row justify-content-center">  
<div class="col-md-4">

<form class="form-container needs-validation"   method="post">
<!-- action="classes/login.classes.php" -->

<div class="form-group">            
<h1 class="text-dark">Login</h1>
</div>

<div class="form-group">
<label class="text-dark">Email</label>
<input type="text" class="form-control" name="em" id="email">
</div>

<div class="form-group">
<label class="text-dark">Password</label>
<input type="password" class="form-control" name="psr" id="pass">
</div> 
 <button  class="btn btn-success btn-block rounded-pill" id="log">Login</button>

</div>
</div>
</div>
</form>

<script src="./js/jquery.js"></script>
<script src="./js/login.js"></script>
<script src="./js/toastr.js"></script>

</body>
</html>