<?php
session_start();
include_once ('database.classes.php');

if(!isset($_SESSION["username"]))  
{  
    header("location:../login.php");  
}

class View extends Database{

    public function viewtable(){
        $array = array();
        $sql = "SELECT tasks.id, tasks.task, tasks.time_kept, tasks.progress, users.username
        FROM task_table as tasks 
        join users_table as users on tasks.user = users.id"; 
        $stmt = $this->connect()->query($sql); 
        $stmt->execute();

        while($results = $stmt->fetch())
        {
            $array[] = $results; 
        }
        return $array ;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
    <?php

    // public function visibletable(){
    $data = new View();
     $row = $data->viewtable();  
     foreach($row as $rows)  
     {  
 ?>
    <tr id= "<?= $rows['id'];?>">
    <td class="table-warning" data-target="task"><?php echo $rows['task'] ?></td>
    <td class="table-info" data-target="time"><?php echo $rows['time_kept'] ?></td>
    <td class="table-success"  data-target="username"><?php echo $rows['username'] ?></td>
    <td class="table-dark"  data-target="progress"><?php echo $rows['progress'] ?></td>  
    <td  class="table-warning">
    <button type="button" class="btn btn-warning rounded-pill editbtn" data-toggle="modal"  
    data-role="update"
    data-id="<?php echo $rows['id'];?>">Update</button>
    </td>
    <td class="table-danger">
    <button  class="btn btn-danger rounded-pill deletebtn" value="<?php echo $rows['id']?>">Delete </button>
    </td>
    <td class="table-success">
    <button  class="btn btn-success rounded-pill donebutton " value="<?php echo $rows['id']?>">Done </button>
    </td>
    </tr>
    <?php
     }
    // }

    ?> 

</body>
</html>
