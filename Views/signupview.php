<?php include('c:/xampp/htdocs/websites/App1/Controllers/signupcontroller.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Welcome to Bucuzzi !</title>

<?php include 'c:/xampp/htdocs/websites/App1/includes/metatags.php' ; ?>
   
<link rel="stylesheet" href="../Resources/css/signup.css" type="text/css">

</head>
<body>
     
    
        <div class="container">
           <div class="sub-container">
            
        
             <div class="login-details">
          				<form action="#">
                <div class="error"></div><br>
             
		        <div class="name-details">
		              <div class="fields">
		            	  <label>Firstname</label>
		                  <input type="text" name="fname" placeholder="Firstname" value="<?php echo $firstname; ?>" >
		               </div>
		        
		               <div class="fields">
		   					<label>Lastname</label>
		                    <input type="text" name="lname" placeholder="Lastname" value="<?php echo $lastname; ?>" >
		  			   </div>
		        </div>
		          
		          
			    <div class="others">
					        
			          <div class="others-field">
			              <label>Email</label>
			              <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>" >
			          </div><br>
	
					   
				    <div class="others-field">
				       <label>Password</label> 
				       <input type="password" id="passa" name="password" placeholder="password" value="<?php echo $password; ?>" >
				       <span id="showa" onclick="checka()"><i class="fa fa-eye"></i></span>
				       
				     </div><br>
				       
				    <div class="others-field">
				           <label>confirm password</label>
				           <input type="password" id="passb" name="confirmpass" placeholder="confirmpassword" >
				     	   <span id="showb" onclick="checkb()"><i class="fa fa-eye"></i></span>
				     	  
				     </div><br>
				       
				    <div class="others-field">
				           <button type="submit" class="btn" name="register">Sign up</button>
				     </div>
		 
			</div>
		   	
		   	<div class="create">			
        		    <p class="already">Already have an account<a href="loginview.php"><b>Login here</b></a></p>
            </div>
            
            </form>
       </div>
    </div> 

	<div class="footer">
   
      copyright @bucuzzi

   </div>
   
   
   </div>
     
    
    </div>
    
</body>
    
<script src='../Resources/js/signup.js'></script>



</script>

</html>