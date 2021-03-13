<?php
include_once ('database.classes.php');
session_start();

class Register extends Database{

    private $name;
    private $em;
    private $usr;
    private $psr;
    private $dob;
    private $ag;
    private $dbemail;

    public function checkemail(){
        $checkemail = $this->em; 
        $sql = "SELECT id,email FROM users_table where email ='$checkemail' "; 
        $stmt = $this->connect()->query($sql); 
        $stmt->execute([$checkemail]);
        $results = $stmt->fetch();
        $this->dbemail = $results;
    }

    public function registercheck(){       
        $firstname = $_POST['firstname'];
        $email = $_POST['email'];
        $username = $_POST['usr'];
        $password = $_POST['psr'];
        $dateofbirth = $_POST['dob'];
        $age = $_POST['age'];
        $lengthpass = strlen($password);   
        if(empty($firstname) || empty( $email) || empty($username) || empty($password) || empty($dateofbirth) || empty($age))
        {
            echo "Please fill all the Details";  
        }

        else if(!preg_match('/^[a-zA-Z\s]*$/',$firstname))
        {
        echo "Name only be characters";  
        }

        else if($lengthpass <= 4)
        {
        echo "Password mustbe atleast 4 characters";  
        }

        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
        echo "Enter a valid email address";  
        }

        else if($age <= 0)
        {
        echo "Age must be above 1";
        }

        else {
            $this->name = $firstname;
            $this->em = $email;
            $this->usr = $username;
            $this->psr = md5($password);
            $this->dob = $dateofbirth;
            $this->ag = $age;
            $this->compareemail();
        }
    }

    public function compareemail(){
        $this->checkemail();
        $email1 = $this->em;
        @$compareemail = $this->dbemail['email'];
        if(@$compareemail == $email1)
        {
        echo "Entred email already exists";
        }
        else {
            try {
                $this->register();
                echo "Registered Successfully can Login Now";
            } catch (Throwable $th) {
                echo 'Message: ' .$th->getMessage(); 
            }
            
        }
    }

    public function register(){
        $sql = "INSERT into users_table(firstname, email, username, pass_word, dob, age) VALUES (?, ?, ?, ?, ?, ?)"; 
        $stmt = $this->connect()->prepare($sql);
        $results = $stmt->execute([ $this->name, $this->em,$this->usr, $this->psr, $this->dob, $this->ag]);
    }

}
$register = new Register();
$register->registercheck();