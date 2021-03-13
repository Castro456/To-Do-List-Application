<?php
include_once ('database.classes.php');
session_start();

class Add extends Database{

    private $task;
    private $user;
    private $progress;

    public function addcheck(){
        $add = $_POST['add1'];
        $userid = $_SESSION["id"];
        $status = 1;
        if(empty($add))   
        {
            echo "Enter a task to ADD";
        }
        else {
            $this->task = $add;
            $this->user = $userid;
            $this->progress = $status;
            try {
                $this->adddb();
                echo "Task Added";
            } catch (Throwable $th) {
                echo 'Message: ' .$th->getMessage(); 
            }
            
        }
    }

    public function adddb(){
        $sql = "INSERT INTO task_table(task,user,progress) VALUES (?, ?, ?)"; 
        $stmt = $this->connect()->prepare($sql);
        $results = $stmt->execute([$this->task, $this->user, $this->progress]);
    }
}
$addtask = new Add();
$addtask->addcheck();