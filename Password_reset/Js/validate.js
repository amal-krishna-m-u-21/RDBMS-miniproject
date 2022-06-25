function visible()
{
 var p = document.getElementById("password");
 if (p.type === "password") {
   p.type = "text";
 } else {
   p.type = "password";
 }
}
function visiblei()
{
var p2 = document.getElementById("password2");
if (p2.type === "password") {
  p2.type = "text";
} else {
  p2.type = "password";
}
}

function validateFormforgot() {
  
    var x = document.forms["forgot_password_form"]["email"].value;
    if (x == "" || x == null) {
      alert("Email must be filled out");
     return false;
    }
    else{alert ("Welcome!!!");
  }

//form validation fn();for password and name ,email

  
    var y = document.forms["forgot_password_form"]["password"].value;
    var z = document.forms["forgot_password_form"]["password2"].value;
    if(y!=z){
      alert("Enter same password");
      return false;
    }
  



  }