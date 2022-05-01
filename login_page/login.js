const cover = document.querySelector(".cover")

let counter = 1

$("#changePage").on('click',function(){
  if(counter%2===1){
    anime({
      targets: cover,
      translateX: [
        { value: -500},
      ],
      scaleX: [
        { value: 3},
        { value: 1},
      ],
      easing: 'linear',
    });
    anime({
      targets: ".loginPage",
      opacity: 0,
    })
    anime({
      targets: ".registerPage",
      opacity: 1,
      easing: 'linear'
    })
    anime({
      targets: ".wordRight",
      opacity: 0,
      translateX: [{ value: 300}],
      duration: 500,
      easing: 'linear'
    })
    anime({
      targets: ".wordLeft",
      translateX: [{value: 0}],
      marginLeft: "0px",
      opacity: 1,
      easing: 'linear'
    })

    counter+=1
    
  }else {
    anime({
      targets: cover,
      translateX: [
        { value: 0},
      ],
      scaleX: [
        { value: 3},
        { value: 1},
      ],
      easing: 'linear',
    });
    anime({
      targets: ".loginPage",
      opacity: 1,
      easing: 'linear'
    })
    anime({
      targets: ".registerPage",
      opacity: 0,
    })
    anime({
      targets: ".wordLeft",
      translateX: [{ value: -300}],
      marginLeft: "-300px",
      opacity: 0,
      duration: 500,
      easing: 'linear'
    })
    anime({
      targets: ".wordRight",
      opacity: 1,
      translateX: [{ value: 0}],
      easing: 'linear'
    })

    counter+=1
  }
})
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
  else{alert ("Welcome")}
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
