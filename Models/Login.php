<?php 
//namespace Users;
require 'c:/xampp/htdocs/websites/App1/includes/db.inc.php';


 class Login{
    
    private $db;

    public function __construct($conn)
    {
        $this->db= $conn;
    }
    


                   //logih users
   public function login($email,$password){
    try{
       
         $sql="SELECT * FROM anonyusers WHERE email =:email";
         $stmt= $this->db->prepare($sql);
         $stmt->bindParam(':email', $email);
         $stmt->execute();
         // Check if row is actually returned
         if($stmt->rowCount() > 0 ){
              //Return row as an array indexed by both column name
             $returned_row= $stmt->fetch(PDO::FETCH_ASSOC);  
             // Verify hashed password against entered password
           if(password_verify($password, $returned_row['password'])){            
                     //define session if login was succesful
                return [
                   'id' =>        $returned_row['id'],
                   'firstname'=>  $returned_row['firstname'], 
                   'email' =>     $returned_row['email'],
                   'lastname' =>  $returned_row['lastname'],
                   'date' =>      $returned_row['reg_date'],
                   'password'=>   $returned_row['password']
                   ];
                   
             echo "password is correct";
             }else{
             //   echo "incorrect password";
                return false;
                 }
            } else{
        //    echo "user does not exist";
           return false;
        }
    }catch(PDOException $e){
        echo  $e->getMessage(); 
    }
  
}  //login




 }





?>