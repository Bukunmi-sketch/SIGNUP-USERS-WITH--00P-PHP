<?php
//namespace Users;
require 'c:/xampp/htdocs/websites/App1/Includes/db.inc.php';

    
    
    class Auth{
        private $db;

        public function __construct($conn)
        {
            $this->db= $conn;
        }
        

        public function escapeString($biotext)
        {
            $biotext=$this->db->quote($biotext);
            return $biotext;
        }
        
              //check if user  is logged in auth
       public function isloggedin(){
        if(isset ($_SESSION['id']) ){
            return true;
        }
        
       }
        //redirect the user  //auth
        public function redirect(string $url):never{
            header('location:'.$url );
            exit();
        }
        
        //log out user   //auth
        public function logout(){
            //destroy and unset active session   
            session_destroy();
            //unset($_SESSION['id'] );
            unset($_SESSION['id'] );
            return true;
        }
        //validate input forms //auth
        public function validate($input) {
            $input=trim($input);
            $input=stripslashes($input);
            $input=htmlspecialchars($input);
            return $input;                     
        }
        //filter email  auth
        public function filteremail(string $email){
           if(filter_var($email,FILTER_VALIDATE_EMAIL)){
           //  echo 'correct email address';
           return true;
           }else{
           //   echo "invalid email address";
           return false;
           }
        }
        
        public function matchpassword($password, $confirmpass){
            if($password!==$confirmpass){  
           //   echo "password does not match";
           return false;
              }
           else{   
           //    echo "password is the same";
           return true;
              }
        }
        public function passwordlength($password){
            if(strlen($password) < 6 ){
             // echo "password is too short";
              return false;
            }else{
            //  echo "password is appropriate";
             return true;
            }
        }
      
    
    }
    
    


   



?>