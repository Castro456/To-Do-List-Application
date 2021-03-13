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
<title>View</title>

<link rel="stylesheet" type="text/css" href="css/global.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link href="css/toastr.scss" rel="stylesheet"/>
</head>
<body>
<div id="msg">
</div>
<nav class="navbar navbar-light" style="background-color: #d1dbda">
  <a class="navbar-brand" href="welcome.php">Back</a>
</nav> 
<div class="alert-success" id="msg">
</div> 
<div class="container ">
<table class="table table-hover table-light">
<thead class="thead-dark">
<tr>
<th colspan="8" ><h1>Tasks</h1></th>
</tr>
<tr>
  <th scope="col">Task</th>
  <th scope="col">Date/Time</th>
  <th scope="col">User</th>
  <th scope="col">Status</th>
  <th scope="col">Edit</th>
  <th scope="col">Delete</th>
  <th scope="col">Done</th>
</tr>
</thead>

<tbody id="table">

</tbody>

</table> 
</div>

<!-- Modal -->

<div class="modal fade " id="mymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLongTitle">Edit</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">
    <div class="form-group">
    <label>Task</label>
    <input type="text" id="task" class="form-control">
    </div>
    <input type="hidden" id="userid" class="form-control">
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary rounded-pill" data-dismiss="modal">Close</button>
    <button type="button" id="save" class="btn btn-success rounded-pill">Save changes</button>
    </div>
    </div>
    </div>
</div>

<script src="./js/view.js"></script>
<script src="./js/toastr.js"></script>
</body>
</html>