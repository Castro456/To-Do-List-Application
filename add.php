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
    <title>Add Task</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="css/toastr.scss" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/global.css">
</head>

<body>

<nav class="navbar navbar-light" style="background-color: #d1dbda">
    <a class="navbar-brand" href="welcome.php">Back</a>
</nav>

<div class="container ">
<div class="row justify-content-center">
<form name="addform" class="add-container"  id="addform" method="post">
<!-- action="classes/add.classes.php" -->

<div class="form-group">
<textarea class="form-controladd" aria-label="With textarea" name="add1" id="text"></textarea>
</div>

<div class="align-self-end ml-auto">
<button type="submit" class="btn btn-danger rounded-pill " id="addbtn" >Add</button>

</div>
</div>
</div>
</form>

<script src="./js/jquery.js"></script>
<script src="./js/add.js"></script>
<script src="./js/toastr.js"></script>

</body>
</html>