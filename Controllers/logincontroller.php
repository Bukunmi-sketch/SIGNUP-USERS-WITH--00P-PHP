<?php
  session_start();

  include 'c:/xampp/htdocs/websites/App1/Models/Auth.php';  
  include 'c:/xampp/htdocs/websites/App1/Models/Login.php';  
  include 'c:/xampp/htdocs/websites/App1/Models/Register.php';  
 

    // create of object of the user class
  $authInstance= new Auth($conn);
  $loginInstance= new Login($conn);
  $registerInstance= new Register($conn);
  


//check if user is logged in
if($authInstance->isloggedin()){
    $authInstance->redirect('home.php');
}

$email="";
$password="";


if($_SERVER['REQUEST_METHOD']=="POST"){
       
       $email=$authInstance->validate($_POST['email']);
       $password=$_POST['password'];
       //check for empty and invalid inputs
       if(empty($email) || empty($password)){
            echo "please enter a valid email or password";  
       }else{
           //check if the user may be logged in
           if($logindata=$loginInstance->login($email, $password)){
               //redirect if succesfullu logged in;
               //$authInstance->redirect('main.php');
               
               $_SESSION['id']=$logindata['id'];
               $_SESSION['email']=$logindata['email'];
               $_SESSION['firstname']=$logindata['firstname'];
               $_SESSION['lastname']=$logindata['lastname'];
               echo "success";
           }else{
               echo "incorrect credentials";
           }
       }  //empty email and password
 }  //isset login




 ?>