<?php
//$imagename=$_FILES['dpic'];
//$dp=$imagename["name"];
require "c:/xampp/htdocs/websites/App1/Controllers/signupimgcontroller.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>upload image and bio</title>

<?php include 'c:/xampp/htdocs/websites/App1/includes/metatags.php' ; ?>
   
<link rel="stylesheet" href="../Resources/css/signupimg.css" type="text/css">

</head>
<body>
     
     <div class="newpostheader">
     <span onclick="history.back()"><i class="fa fa-arrow-left"></i></a></span>
     <h>upload image and bio</h>
     </div>

     <div class="container">

           <div class="sub-container">
              <div class="login-details"> 
               <div class="error"></div>

                <form action="" enctype="multipart/form-data">
            
     		    <div id="upload" >
                        <img src="" onClick="trigger()" id="profileDisplay" alt="upload"> 
                	    <input type="file" name="dpic" onchange="displayImage(this)"    id="capture"  style="display:none;">
                	   <i class="fa fa-camera" id="camera"></i>
                </div>

                <input type="hidden" name="id" value="" > 
      			<label>Enter your Bio</label>
             	<textarea id="description" name="textbio" placeholder="Enter new bio "> </textarea>
       				   <br><br>
    		   <button type="submit" name="upload" class="send-btn">continue</button>
     
           </form>

         </div>

       </div>  
  </div>  
     
     
     
     
     <script src="../Resources/js/signupimg.js"> </script>

</body>

</html>



               
