<?php
   require 'c:/xampp/htdocs/websites/App1/includes/db.inc.php';

   // session_start();
  
     class Uploadimg{
          private $db;
         
          public function __construct($conn)
          {
              $this->db= $conn;
          }

           
public function imgextension($dp){
            
    $img_explode=explode('.',$dp);
    $img_ext=end($img_explode);
    $extensions=['png','jpeg','jpg'];
    
    if(in_array($img_ext,$extensions)==true){
           return true;
       //  echo "file is correct";
    }
    else{
     //echo "file must be png,jpg or jpeg";
       return false;
    }

}
 
public function largeImage($imagesize){
   
 if($imagesize > 1024000){
    //  echo "file is to large";
      return false;
 }else{
   //  echo 'file is okay';
   return true;
 }
}
 
public function moveImage($imgtmp, $dirfile,){
 if(move_uploaded_file($imgtmp, $dirfile)){
        return true;
 }else{
         return false;
 }
 
}
 
public function updateImage( $dp, $biotext, $sessionid){
 
 try{
 
     $dpsql="UPDATE anonyusers SET profileimage=:image, 
     Bio=:description WHERE id=:userid";
 
     $stmt=$this->db->prepare($dpsql);
     $stmt->bindParam(":userid", $sessionid);
     $stmt->bindParam(":description", $biotext);
     $stmt->bindParam(":image", $dp);
 
     if( $stmt->execute()){
         //return the users data and email will be the unique key                  
                 return [
                 'id' => $sessionid,  
                 'bio' => $biotext,
                 'image' => $dp
                     ];
                }else{
             //   echo "error while inserting";
             return false;
          }
     } catch(PDOException $e){
            echo  $e->getMessage(); 
        }
 
     }
   
   
    }


?>