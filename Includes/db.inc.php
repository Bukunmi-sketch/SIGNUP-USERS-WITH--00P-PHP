<?php

   $servername = "localhost";
   $dbname= "bukunmi";
   $username= "root";
   $password = "";


   try{
    $conn= new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    if($conn){
      //  echo "connected succesfully";
       // echo "<br>";
    }
    else{
     //   echo "can't connect";
    }

  }
   catch(PDOException $e){
       echo "error while connecting to the database" .  $e->getMessage() ;
   }

   

    



?>