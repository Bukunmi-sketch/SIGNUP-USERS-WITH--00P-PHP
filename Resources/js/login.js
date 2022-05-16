 
  function check(){
    var d=document.getElementById("pass");
    var eye=document.getElementById("show");
     
     
    if(d.type==="password"){
                    d.type="text";
                    eye.innerHTML='<i class="fa fa-eye-slash"></i>';
                              }
    else{
         d.type="password";
        eye.innerHTML='<i class="fa fa-eye"></i>';
          }
}


const form=document.querySelector("form");
const btn=document.querySelector("button");
const error=document.querySelector(".error");

form.onsubmit=(e)=>{
e.preventDefault();
}

btn.onclick=()=>{
 
let xhr="";
   if(window.XMLHttpRequest){
      xhr=new XMLHttpRequest();
         }
    else{
          xhr=new ActiveXObject("Microsoft.XMLHTTP");
        }
 xhr.onreadystatechange=()=>{
   if(xhr.readyState===XMLHttpRequest.DONE){
        if(xhr.status===200){
 
             let data=xhr.responseText;
            if(data == "success"){
               location.href="home.php";
              }
           else{
          error.textContent=data;
          error.style.display="block";
          btn.innerHTML="Login again";
          btn.style.fontSize="15px";
           }
        }    //STATUS ===200
    }
else{
   btn.innerHTML='<i class="fa fa-spinner fa-pulse"></i>';
    btn.style.color="white";
   btn.style.fontSize="1.2em";
   
       }//DONE
}

xhr.open("POST","http://localhost/websites/App1/Controllers/logincontroller.php",true);
let formdata=new FormData(form);
xhr.send(formdata);     
}