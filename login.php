<?php include('./assets/include/header.php') ?>
<?php include('./assets/include/menu.php') ?>
  <section class="login-bner text-center">
    <div class="container">
    <h1>
          Login to your Lockmypass account
          </h1>
    <div class="row">
      <div class="col-lg-6">
        
     <img src="assets/img/login.png" >

      </div>
      <div class="col-lg-6">
        <div class="login">
        <div class="nav nav-tabs"  >
        <a class="nav-item nav-link" id="login"  href="login.php"  >Log in</a>
        <a class="nav-item nav-link" id="signup"  href="./signup.php">Sign up</a>
         </div>
         <div class="box">
       <input type="email" placeholder="Email address" class="l-input">
       <p class="i-t">Please enter a valid address</p>
       <div class="pass">
       <input type="password" placeholder="Master password" class="l-input" id="show">
       <span class="show-password" onclick="togglePassword('password1')">
        <i class="fa fa-eye-slash"></i>
        </span>
       <button>Sign in</button>
       <div class="scnd-lst">
        <a href="javascript:;"><p>Create your Lockmypass account</p></a>
        <a href="javascript:;"><p>Forgot password?</p></a>
       </div>
       <div class="lst">
       <h6 class="accordion">Advanced options <i class="fa-solid fa-caret-down"></i></h6>
         <div class="panel">
         <div class="flx">
           <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
            </label>
          <p>Remember email</p>
         </div>
         <div class="flx">
           <label class="switch">
            <input type="checkbox" checked>
            <span class="slider round"></span>
           </label>
           <p>Log in using one time password</p>
         </div>
         </div>
         </div>
         
         
       </div>
      </div>
      </div>
        
    </div>
  </section>

 
 <?php include('./assets/include/footer.php') ?>