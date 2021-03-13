<?php
session_start();
if(!isset($_SESSION["username"]))  
{  
    header("location:login.php");  
}  
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome User</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/global.css">

</head>
<body>

<nav class="navbar navbar-light" style="background-color: #d1dbda">
<a class="navbar-brand" href="home.html">Home</a>
<a class="btn btn-danger my-2 my-sm-0 rounded-pill" href="logout.php" role="button">Logout</a>
</nav>

<div class="container ">
<div class="row justify-content-center">  
<div class="col-md-9"> 
<div class="form-group">
<h1 class="text-correct">WELCOME:  <?php echo $_SESSION["username"] ?></h1>
</div>

<div class="form-group">
<form action="add.php" method="post">
<button class="button" name="add" >Add Task</button>
</form>
</div>

<div class="form-group">
<form action="view.php" method="post">
<button class="button1" id="view" type="submit">View</button>
</form>
</div>

</div>
</div>
</div>

</body>
</html>