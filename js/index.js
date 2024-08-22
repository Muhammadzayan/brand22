// Get the link element
const link = document.getElementById('click-me');

// Add an event listener to the link element
link.addEventListener('click', function(event) {
  // Prevent the default link behavior
  event.preventDefault();

  // Redirect to another page
  window.location.href = 'apps.php';
});


var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
var acc = document.getElementsByClassName("accordion2");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "flex") {
      panel.style.display = "none";
    } else {
      panel.style.display = "flex";
    }
  });
}

function myFunction() {
  var x = document.getElementById("show");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function myFunction() {
  var x = document.getElementById("show2");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


function togglePassword(password1) {
  const passwordField = document.getElementById("show");
  const showPasswordButton = passwordField.nextElementSibling;
  const eyeIcon = showPasswordButton.querySelector('i');

  const passwordStrengthMeter = passwordField.nextElementSibling.nextElementSibling.querySelector('#password-strength-meter');
  const passwordStrengthText = passwordField.nextElementSibling.nextElementSibling.querySelector('#password-strength-text');

  if (passwordField.type === 'password') {
    passwordField.type = 'text';
    eyeIcon.classList.remove('fa-eye-slash');
    eyeIcon.classList.add('fa-eye');
  } else {
    passwordField.type = 'password';
    eyeIcon.classList.remove('fa-eye');
    eyeIcon.classList.add('fa-eye-slash');
  }
  checkPasswordStrength(passwordField.value, passwordStrengthMeter, passwordStrengthText);
}
// function togglePassword(password2) {
//   const passwordField = document.getElementById("show2");
//   const showPasswordButton = passwordField.nextElementSibling;
//   const eyeIcon = showPasswordButton.querySelector('i');

//   if (passwordField.type === 'password') {
//     passwordField.type = 'text';
//     eyeIcon.classList.remove('fa-eye-slash');
//     eyeIcon.classList.add('fa-eye');
//   } else {
//     passwordField.type = 'password';
//     eyeIcon.classList.remove('fa-eye');
//     eyeIcon.classList.add('fa-eye-slash');
//   }
// }
function checkPasswordStrength(password, meter, text) {
  const strength = getPasswordStrength(password);
  meter.style.width = strength + '%';
  meter.style.background = getStrengthColor(strength);
  text.textContent = getStrengthText(strength);
}

// function getPasswordStrength(password) {
//   // implement your password strength algorithm here
//   // for example:
//   if (password.length < 8) return 20;
//   if (password.match(/[a-z]/) && password.match(/[A-Z]/) && password.match(/[0-9]/)) return 60;
//   if (password.match(/[a-z]/) && password.match(/[A-Z]/) && password.match(/[0-9]/) && password.length > 12) return 80;
//   return 100;
// }

// function getStrengthColor(strength) {
//   if (strength < 40) return '#red';
//   if (strength < 60) return '#yellow';
//   return '#green';
// }

// function getStrengthText(strength) {
//   if (strength < 40) return 'Weak';
//   if (strength < 60) return 'Medium';
//   return 'Strong';
// }


function move(){
	var x = document.getElementById("range").value;
	var ele = document.getElementById("output");
	ele.style.marginLeft=x+"%";
	ele.innerHTML = x;
	
}

const tabButtons = document.querySelectorAll('.tab-button');
  const tabContents = document.querySelectorAll('.tab-content2');
  const tabButtonsContainer = document.querySelector('.tab-buttons');

tabButtons.forEach(button => {
    button.addEventListener('click', function () {
      const tab = this.getAttribute('data-tab');

      tabButtons.forEach(btn => btn.classList.remove('active'));
      tabContents.forEach(content => content.classList.remove('active'));

      this.classList.add('active');
      document.querySelector(`.tab-content2[data-tab="${tab}"]`).classList.add('active');

      document.querySelector('.tab-contents2').scrollTo({ top: 0, behavior: 'smooth' });
    });
  });

tabButtons[0].classList.add('active');
  tabContents[0].classList.add('active');


  $('#navbarSupportedContent').collapse('hide');


 
  