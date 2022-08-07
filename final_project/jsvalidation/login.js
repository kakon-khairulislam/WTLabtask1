function validateusername(){
    var ptrn = /^[a-zA-z_0-9]*$/;
    var username = document.getElementById("user_name");
    if(username.value ==""){
    document.getElementById("alert2").innerHTML = "*Username can't be empty";
    }else if(!ptrn.test(document.logform.user_name.value)){
    document.getElementById("alert2").innerHTML = "*Only characters, alphabic numeric characters, dash, underscore can be used in username";    
    }else if(username.value.length<4){
    document.getElementById("alert2").innerHTML = "*Username can't have less than 4 two digits";
    }else if(username.value.length>15){
    document.getElementById("alert2").innerHTML = "*Username can't be more than 15 two digits";
    }else{
    document.getElementById("alert2").innerHTML = "";
    
    } 

} document.logform.user_name.addEventListener("keyup",validateusername);
function validatepassword(){
    var ptrn = /^[A-Z]+[a-zA-Z\d]+[a-zA-Z\d@$#%&(()?]+$/;
    var password = document.getElementById("password");
    if(password.value ==""){
    document.getElementById("alert4").innerHTML = "*Password can't be empty";
    }else if(ptrn.test(document.logform.user_name.value)){
    document.getElementById("alert4").innerHTML = "*Wrong password formation";
    }else if(password.length<8){
    document.getElementById("alert4").innerHTML = "*Password can't have less than 8 two digits";
    }else if(password.length>32){
    document.getElementById("alert4").innerHTML = "*Password can't be more than 32 two digits";
    }else{
    document.getElementById("alert4").innerHTML = "";
    
    } 
} document.logform.password.addEventListener("keyup",validatepassword);

function validateForm(){
    let x1 = document.forms["logform"]["user_name"].value;
    let x2 = document.forms["logform"]["password"].value;
    if (x1 ==""){
        document.getElementById("alert2").innerHTML = "*Name must be filled out";
        return false
    }else if(x2 ==""){
        document.getElementById("alert4").innerHTML = "*Password must be filled out";
        return false;
    }else if(x1.length<4){
        document.getElementById("alert2").innerHTML= "*Username can't have less than 4 two digits" ;
        return false;
    }else if(x1.length>15){
        document.getElementById("alert2").innerHTML= "*Username can't be more than 15 two digits";
        return false;
    }else if(x2.length<8){
        document.getElementById("alert4").innerHTML= "*Password can't be less than 8 two digits";
        return false;
    }else if(x2.length>32){
        document.getElementById("alert4").innerHTML= "*Password can't be more than 32 two digits"; 
        return false;
    }   
    
        
    
        
   
  }
