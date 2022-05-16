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
