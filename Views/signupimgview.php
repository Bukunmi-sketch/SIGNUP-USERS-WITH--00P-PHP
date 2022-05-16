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
     
     
     
     
     <script type="text/javascript">
      
      const forme=document.querySelector("form");
      const btn=document.querySelector(".send-btn");
      const error=document.querySelector(".error");
      
       
      forme.onsubmit=(e)=>{
         e.preventDefault();
                 }
       
       
       btn.onclick=()=>{
     
           let xhr=new XMLHttpRequest();
            
            xhr.onreadystatechange=()=>{
               if(xhr.readyState===XMLHttpRequest.DONE){
                    if(xhr.status===200){
                           
                           let data=xhr.responseText;
                           
                           if(data == "success"){
                           
		                            error.style.backgroundColor="#D6F1C6";
		                            error.style.color="white";
		                            error.style.color="1px solid #1fae51";
		                            error.textContent=data;
		                            error.style.display="block";
		                            btn.innerHTML="success √";
		                            btn.style.fontSize="15px";
		                          //  alert("success");
		                            location.href="home.php";
                           	}
                           else{
	                            error.textContent=data;
	                            error.style.display="block";
	                            btn.innerHTML="Try again";
                          	    btn.style.fontSize="15px";
                           	}
                      }    //STATUS ===200
                   } //DONE
                           else{
                           btn.innerHTML='<i class="fa fa-spinner fa-pulse"></i>';
                           btn.style.color="white";
                           btn.style.fontSize="1.2em";
                           }//DONE
                                 
               }
                 
           xhr.open("POST","http://localhost/websites/App1/Controllers/signupimgcontroller.php",true);
           let formdata=new FormData(forme);
           xhr.send(formdata);
          }
      
      
      
     function trigger(e){
     document.querySelector("#capture").click();
		 }
     
     function displayImage(e) {
     if (e.files[0]) {
     
     var reader = new FileReader();
     
     reader.onload = function(e){
     
     document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
     
     }
     reader.readAsDataURL(e.files[0]);
    		 }
     	}
     </script>

</body>

</html>



               
