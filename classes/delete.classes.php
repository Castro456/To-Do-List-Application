<?php
include_once ('database.classes.php');

class Delete extends Database{

    private $delete1;

    public function del(){
        $delete = $_POST['delete'];

        if (empty($delete)) {
            echo "Problem Occured";
        }
        else {
            $this->delete1 = $delete;
            try {
                $this->dbdelete();
                echo "Deleted";
            } catch (Throwable $th) {
                echo 'Message: ' .$th->getMessage(); 
            }
        }
    }
    protected function dbdelete(){
        $dbdelete = $this->delete1;
        $sql = "DELETE  FROM task_table WHERE id=$dbdelete "; 
        $stmt = $this->connect()->query($sql); 
        $stmt->execute([$dbdelete]);
    }
}
$taskdelete = new Delete();
$taskdelete->del();
