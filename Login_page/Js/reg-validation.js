//form validation fn();for password and name ,email
function validateForm() {
  var x = document.forms["registerPage"]["name"].value;
  if (x == "" || x == null) {
    alert("Name must be filled out");
    return false;
  }
  
    var y = document.forms["registerPage"]["password"].value;
    var z = document.forms["registerPage"]["password2"].value;
    if(y!=z){
      alert("Enter same password");
      return false;
    }
  
  
    var x = document.forms["registerPage"]["email"].value;
    if (x == "" || x == null) {
      alert("Email must be filled out");
     return false;
    }


    else{alert ("Welcome!!! \n Please Login !!!");}
  }
  //validation for length and character included in password only for password;
  var myInput = document.getElementById("psw");
  var letter = document.getElementById("letter");
  var capital = document.getElementById("capital");
  var number = document.getElementById("number");
  var length = document.getElementById("length");
  
  // When the user clicks on the password field, show the message box
  myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
  }
  
  // When the user clicks outside of the password field, hide the message box
  myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
  }
  
  // When the user starts to type something inside the password field
  myInput.onkeyup = function() {
    // Validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
    if(myInput.value.match(lowerCaseLetters)) {  
      letter.classList.remove("invalid");
      letter.classList.add("valid");
    } else {
      letter.classList.remove("valid");
      letter.classList.add("invalid");
    }
    
    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if(myInput.value.match(upperCaseLetters)) {  
      capital.classList.remove("invalid");
      capital.classList.add("valid");
    } else {
      capital.classList.remove("valid");
      capital.classList.add("invalid");
    }
  
    // Validate numbers
    var numbers = /[0-9]/g;
    if(myInput.value.match(numbers)) {  
      number.classList.remove("invalid");
      number.classList.add("valid");
    } else {
      number.classList.remove("valid");
      number.classList.add("invalid");
    }
    
    // Validate length
    if(myInput.value.length >= 8) {
      length.classList.remove("invalid");
      length.classList.add("valid");
    } else {
      length.classList.remove("valid");
      length.classList.add("invalid");
    }
  }
  //show password
  
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
 function visiblel()
 {
  var pl = document.getElementById("pswd");
  if (pl.type === "password") {
    pl.type = "text";
  } else {
    pl.type = "password";
  }
}
 
  function validateFormlog() {
  
    var x = document.forms["loginPage"]["email"].value;
    if (x == "" || x == null) {
      alert("Email must be filled out");
     return false;
    }
    else{alert ("Done!!!");
  }
  }