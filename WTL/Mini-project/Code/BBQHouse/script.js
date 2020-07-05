function validateform(){  
var fname=document.myform2.First.value;  
var lname=document.myform2.First.value;  
var username=document.myform2.username.value;  
var password=document.myform.psw.value;  
var password_repeat=document.myform2.psw-repeat.value;  
var email=document.myform2.email.value;  
var contact=document.myform2.contact.value;   

 alert(fname+lname);
if (fname==null || fname==""){  
  alert("Name can't be blank");  
  return false;  
}else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
}  