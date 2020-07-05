
      function validateForm() {
        var fname=form["First"].value;  
var lname=form["Last"].value;  
var username=form["username"].value;  
var password=form["psw"].value;  
var password_repeat=form["psw-repeat"].value;  
var email=form["email"].value;  
var contact=form["contact"].value;  
        if (password.length <6) {
          alert("First name cannot be left blank.");
          return false;
        }
      }
      
       var form = document.getElementById("myform2");
       form.onsubmit = validateForm;
   