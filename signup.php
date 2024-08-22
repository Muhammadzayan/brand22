<?php include('./assets/include/header.php') ?>
<?php include('./assets/include/menu.php') ?>
  <section class="login-bner text-center">
    <div class="container">
    <h1>
    Create an account
          </h1>
    <div class="row">
      <div class="col-lg-6">
        
     <img src="assets/img/signup.png" >

      </div>
      <div class="col-lg-6">
        <div class="login signup">
        <div class="nav nav-tabs"  role="tablist">
        <a class="nav-item nav-link" id="login"  href="login.php"  >Log in</a>
        <a class="nav-item nav-link" id="signup"  href="signup.php">Sign up</a>
         </div>
         <div class="box">
       <input type="email" placeholder="Email address" class="l-input">
       <p class="i-t">Please enter a valid address</p>
       <div class="pass">
       <input type="password" placeholder="Master password" class="l-input" id="show">
       <span class="show-password" onclick="togglePassword('password1')">
        <i class="fa fa-eye-slash"></i>
        </span>
        <div class="password-strength">
    <span id="password-strength-meter"></span>
    <span id="password-strength-text"></span>
  </div>
       </div>
       <div class="pass">
       <input type="password" placeholder="Confirm master password" class="l-input" id="show2" >
       <span class="show-password" onclick="togglePassword('password2')">
        <i class="fa fa-eye-slash"></i>
        </span>
       <p>By completing this form, I agree to the Terms and Privacy Policy. I want to receive promotional emails, unless I opt out.</p>
       </div>
       <button>Create Lockmypass account</button>
       <div class="scnd-lst paddd">
       
       </div>
       <div class="an-btn-wrapper btn">
            <a href="javascript:;" class="an-theme-btn "><img src="assets/img/google.png" alt=""> Sign in with Google</a>
            <a href="javascript:;" class="an-theme-btn "><img src="assets/img/apple.png" alt=""> Sign in with Apple</a>
           </div>
      </div>
      </div>
        
    </div>
  </section>

 
 <?php include('./assets/include/footer.php') ?>