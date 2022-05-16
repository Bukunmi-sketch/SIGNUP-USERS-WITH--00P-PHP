<?php include("c:/xampp/htdocs/websites/App1/Controllers/logincontroller.php"); ?> 
        <!DOCTYPE html>
        <html>
        <head>
        <title>log in to Bucuzzi</title>

        <?php include 'c:/xampp/htdocs/websites/phpclass/App1/includes/metatags.php' ; ?>
        
        <link rel="stylesheet" href="../Resources/css/login.css" type="text/css">
        
      
        </head>
        
        <body id="body">
        <!--
        <div class="newpostheader">
        <p>By proceeding, you agree to Bucuzzi Terms, which includes letting Bucuzzi request and receive your phone number. <a href="#">Change settings</a></p>
        </div>
      -->
        <div class="container">
        
        <div class="sub-container">
        
        <div class="logobox">
        <div class="sub-logo">
        <p class="logoo">Bucuzzi</p>
        </div>
        </div>
        
        <div class="login-details">
          <form action="#">
             <div class="error"><p></p></div><br>
                
                <div class="email-details">
                     <input type="email" name="email" placeholder="Mobile number or email   address" autofocus required>
                </div>
                
                <div class="password-details">
                    <span  id="show" onclick="check()">
                    <i class="fa fa-eye"></i>
                    </span>
                    <input type="password" id="pass" name="password" placeholder="Password"     required autocomplete="off">
                </div>
                
                <button class="submit" name="login">Log In</button>
                
                <div class="forgetbox">   
                    <a href="#" class="forget">Forgotten password?</a>
                </div>
                
                <div class="before">
                     <p class="or">  or  </p>
                </div>
        
                <div class="create">
                <a href ="signupview.php " class="createbut"> Create New  Account </a>
              </div>
        
            </form>  
         </div>
        </div>
        
        
        <div class="footer">
    
        
        </div>
        
        
        </div>
        <script src='../Resources/js/login.js'></script>
  
  </body>
  
 
  </html>