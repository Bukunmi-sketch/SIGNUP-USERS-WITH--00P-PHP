<?php
    
   include 'c:/xampp/htdocs/websites/App1/Models/Auth.php';  
    include 'c:/xampp/htdocs/websites/App1/Models/Users.php';  
    include 'c:/xampp/htdocs/websites/App1/Models/Login.php';  
    include 'c:/xampp/htdocs/websites/App1/Models/Register.php';  
   
    /*include_once 'c:/xampp/htdocs/websites/App1/Includes/autoload.php';*/
   
      // create of object of the user classs
    $authInstance= new Auth($conn);
    $registerInstance= new Register($conn);
   


     $firstname='';
     $lastname='';
     $email='';
     $password='';
     $confirmpass="";
    

    if($_SERVER['REQUEST_METHOD']=="POST"){

       // $authInstance= new User($conn);

        $firstname=$authInstance->validate($_POST['fname']);
        $lastname=$authInstance->validate($_POST['lname']);
        $email=$authInstance->validate($_POST['email']);
        $password=$_POST['password'];
        $confirmpass=$_POST['confirmpass'];
        $date=date('y/m/d');
        
        if( !empty($firstname) && !empty($lastname) && !empty($email) && !empty($password) && !empty($confirmpass)  ){
            //function to check invalid email
              if($authInstance->filteremail($email)){
                  //funtion to check if email has been used;
                    if($registerInstance->RegisterCheckemail($email)){
                        //function to check if password is longer than 6
                         if($authInstance->passwordlength($password)){
                               //function to check if confirmpassword & password matches
                                if($authInstance->matchpassword($password,$confirmpass)){
                                    //function to register the user
                                     if($registerInstance->register($firstname, $lastname, $email, $password, $date)){
                                          if($data=$registerInstance->fectchRegistedDetails($email)){
                                                //define session if login was succesful with returned user data
                                                session_start();
                                                $_SESSION['email']=$data['email'];
                                                $_SESSION['firstname']=$data['firstname'];
                                                $_SESSION['lastname']=$data['lastname'];
                                                $_SESSION['id']=$data['id']; 
                                                echo "success";

                                          }else{
                                                echo 'we could nt sign u in';
                                          }                                                                              
                                     }else{
                                         echo "an error occurred while attempting to sign up";
                                     }
                                }else{
                                    echo "password does not match";
                                }
                         }else{
                             echo "password is too short";
                         }
                    }else{
                        echo "oops this email has been used";
                    }
              }else{
                  echo "invalid email address";
              }

        }else{
            echo "all fields are required to be filled";
        }
    
    }









?>