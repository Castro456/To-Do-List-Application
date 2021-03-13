<?php
include_once ('database.classes.php');

class Update extends Database{

    private $uid;
    private $tablechange;

   public function changes(){
    $id= $_POST['id'];
    $change= $_POST['task'];

    if ( empty($change) || empty($id) ) {
        echo "Problem Occured";
    }
    else {
        $this->uid = $id;
        $this->tablechange = $change;
        try {
            $this->taskedit();
            echo "Changes Saved";
        } catch (Throwable $th) {
            echo 'Message: ' .$th->getMessage(); 
        }
    }
   }

   public function taskedit(){
       $dbchange = $this->tablechange;
       $dbuid = $this->uid;
    $sql="UPDATE task_table set task= '$dbchange' WHERE id= $dbuid";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$dbchange, $dbuid]);
   }
}
$changesintable = new Update();
$changesintable->changes();
