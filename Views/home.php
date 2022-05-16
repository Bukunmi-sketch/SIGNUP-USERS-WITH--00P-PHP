<?php 
 session_start();
            //import users class file
    include 'c:/xampp/htdocs/websites/App1/Models/Auth.php';  
    include 'c:/xampp/htdocs/websites/App1/Models/Users.php';  
    include 'c:/xampp/htdocs/websites/App1/Models/Login.php';  
    include 'c:/xampp/htdocs/websites/App1/Models/Register.php'; 
    include 'c:/xampp/htdocs/websites/App1/Models/Follow.php';  
    include 'c:/xampp/htdocs/websites/App1/Models/Likes.php';  
 
      // create of object of the user class
    $authInstance= new Auth($conn);
    $userInstance= new Users($conn);
    $registerInstance= new Register($conn);
   

     if( !$authInstance->isloggedin() ){
         $authInstance->redirect('loginview.php');
     }
     

      //used as a unique key to get all the users data after signup 
      $sessionid= $_SESSION['id'];
     //get all the users info with the users class
    $userInfo=$userInstance->getuserinfo($sessionid);
    $email =$userInfo['email'];
    $firstname=$userInfo['firstname'];
    $lastname= $userInfo['lastname'];
    $registered_date=$userInfo['date'];
    $dp=$userInfo['profileimage'];

   // $sessionid= $_SESSION['id'];

    //when users logs out call the logout function and redirect them to the login page.
    if( isset($_GET['logout']) && ($_GET['logout']=='true')  ){
         $authInstance->logout();
         $authInstance->redirect("loginview.php");
    }


    $dirfile="c:/xampp/htdocs/websites/App1/Images/signup_img/";
   

?>

<!DOCTYPE html>
         <html lang="en">
         <head>
         <title>Home </title>
         <?php include 'c:/xampp/htdocs/websites/App1/includes/metatags.php' ; ?>

       <link rel="stylesheet" type="text/css" href="../Resources/css/home.css">
      
  </head>

       <body>
           <nav>
               <div class="container">
                    <div class="bar" onclick="opennav()">
                        <i class="fa fa-navicon"></i>
                    </div>

                    <h2 class="logo">
                      Home
                    </h2>
                 


                    
                    <div class="create">
                      <!--  <label class= "btn btn-primary" for="create-post">create</label> -->
                        <div class="profile-photo">
                        <img src="http://localhost/websites/App1/Images/signup_img/dp--<?php echo "{$dp}" ; ?>" alt="">
                        </div>
                    </div>
               </div>
           </nav>

       


           <!--------MAIN   ------->
           <main>
              <div class="container">
                      
                   <div class="profile-photo-big">
                             <img src="http://localhost/websites/App1/Images/signup_img/dp--<?php echo "{$dp}" ; ?>" alt="">
                   </div>     
                   <div class="welcome-address">
                         hello <?php echo "{$firstname} {$lastname}" ;     ?>
                   </div>

              </div> 

              <div class="logout">
                 <a href="home.php?logout=true">logout</a>
              </div>
           </main>
        
       </body>

         </html>
































