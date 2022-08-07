function validatepassword(){
    var ptrn = /^[A-Z]+[a-zA-Z\d]+[a-zA-Z\d@$#%&(()?]+$/;
    var password = document.getElementById("password");
    if(password.value ==""){
    document.getElementById("alert4").innerHTML = "*Password can't be empty";
    }else if(ptrn.test(document.regform.user_name.value)){
    document.getElementById("alert4").innerHTML = "*Wrong password formation";
    }else if(password.value.length<8){
    document.getElementById("alert4").innerHTML = "*Password can't have less than 4 two digits";
    }else if(password.value.length>32){
    document.getElementById("alert4").innerHTML = "*Password can't be more than 15 two digits";
    }else{
    document.getElementById("alert4").innerHTML = "";
    
    } 
} document.passvalidation.password.addEventListener("keyup",validatepassword);