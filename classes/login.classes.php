<?php
include_once ('database.classes.php');
session_start();

class Login extends Database{

private $em;
private $pass;
private $results;

public function checklogin(){
    $email = $_POST['em'];
    $password = $_POST['psr'];

    if(empty($email) || empty($password))
    {
    echo "Please Fill both the Fields";
    }

    else if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
    {
    echo "Enter valid Mail Format";
    }

    else {
        $this->em = $email;
        $this->pass = $password;
        $this->getdetails();
    }
}

public function getdetails(){
    $email = $this->em;
    $sql = "SELECT id, email, pass_word, username FROM users_table where email ='$email' "; 
    $stmt = $this->connect()->query($sql); 
    $stmt->execute([$email]);

    $result = $stmt->fetch();
    $this->results = $result ;
    $this->validate();
}

public function validate(){
    try {
        $checkpass =  $this->results['pass_word'];
        $password = $this->pass;
        $password1 = md5($password);

        if($checkpass == $password1){
            $this->setsession();
            echo "Success";
        }

        else {
            throw new Exception("Username or Password Incorrect" );   
        }

    }catch(Exception $e) {
        echo 'Message: ' .$e->getMessage();           
    }
}

public function setsession(){
    $_SESSION["username"] = $this->results['username'];
    $_SESSION["id"] = $this->results['id'];
}
   
}
$display = new Login();
$display->checklogin();
