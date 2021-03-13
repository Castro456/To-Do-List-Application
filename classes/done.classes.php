<?php
include_once ('database.classes.php');

class Done extends Database{

    private $done1;

    public function taskdone(){
        $done = $_POST['done'];    
        if (empty($done)) {
            echo "Problem Occured";
        }

        else {
            $this->done1 = $done;
            try {
                $this->markeddone();
                echo "Task Marked as Done";
            } catch (Throwable $th) {
                echo 'Message: ' .$th->getMessage(); 
            }
        }
    }

    public function markeddone(){
        $dbdone = $this->done1;
        $sql = "UPDATE task_table SET progress = 2 WHERE id = $dbdone "; 
        $stmt = $this->connect()->query($sql); 
        $stmt->execute([$dbdone]);
    }
}
$markedasdone = new Done();
$markedasdone->taskdone();
