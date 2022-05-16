<?php
//namespace Users;
require 'c:/xampp/htdocs/websites/App1/includes/db.inc.php';


class Users{
  private $db;
  
  public function __construct($conn)
  {
      $this->db= $conn;
  }
  
  public function getAllUsers(){
        $sq="SELECT firstname FROM anonyusers ";
        $stmt=  $this->db->query($sq);
        $stmt->execute();
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach($data as $dataa){
            return [
              'firstname'=> $dataa['firstname']
            ];
        }
     
     /*   if($data){
       //   $data=[];
        return $data;
        
        }else{
          return false;
        } */
      }


        //get all the details about the user
  public function getuserinfo($userid){
    try{
        $sql="SELECT * FROM anonyusers WHERE id=:userid";
        $stmt=$this->db->prepare($sql);
        $stmt->bindParam(":userid", $userid);
        $stmt->execute();
        $returned_row =$stmt->fetch(pdo::FETCH_ASSOC);
        return [
           'id' => $returned_row['id'],
          'email' =>         $returned_row['email'],
          'firstname'=>   $returned_row['firstname'],  
          'lastname' =>   $returned_row['lastname'],
          'date' =>      $returned_row['reg_date'],
          'profileimage'=> $returned_row['profileimage'],
          'followers' =>   $returned_row['followers'],
          'following' =>   $returned_row['following'],
          'status' =>      $returned_row['Status'],
          'Bio' =>         $returned_row['Bio'],
          'Mobile' =>      $returned_row['Mobile']
          ];
    }catch(PDOException $e){
      echo $e->getMessage();
    }
  } 

}




?>