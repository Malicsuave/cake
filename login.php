<?php

 
 require_once('classes/database.php');
 $con=new database();

 session_start();

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $result = $con->check($username, $password);  

if($result) {
      $_SESSION['username'] = $result['username'];
      $_SESSION['User_Id'] = $result['User_Id'];
  if ($result['account_type']==0){
     header('location:index.php');
  }
  else if ($result['account_type']==1){
      header('location:index.php');
  }
}
  else{
$error = "Incorrect username or password ";
  }
}


?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=\, initial-scale=1.0">
 
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./bootstrap-4.5.3-dist/css/bootstrap.css">
  <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.css">
  <!-- Link for styles -->
  <link rel="stylesheet" href="./styling/style.css">
  
  <!-- Link for fontawesome -->
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  

  <title>Marga's Cake</title>
 </head>
 

 <body class="align">
 <h1>Welcome to Marga's Cake</h1>
  <h2>Sign-In</h2>
  <div class="grid">
    

    <form  method="POST" class="form login">

      <div class="form__field">
        <label for="login__username"><svg class="icon">
            <use xlink:href="#icon-user"></use>
          </svg><span class="hidden">Username</span></label>
        <input autocomplete="username" id="username" type="text" name="username" class="form-input" placeholder="Username" required>
      </div>

      <div class="form__field">
        <label for="login__password"><svg class="icon">
            <use xlink:href="#icon-lock"></use>
          </svg><span class="hidden">Password</span></label>
        <input id="password" type="password" name="password" class="form-input" placeholder="Password" required>
      </div>

<<<<<<< HEAD
      <div class="form-field">
=======
    <input type="text" class="form-control" name="password" id="password" placeholder="Enter password" required>
            <div class="valid-feedback">Looks good!</div>
           

    </div>
    <button type="submit" name="login">Sign Up</button>
  
    </div>
      
</form>
		
	</div>
	<div class="form-container sign-in-container">
		<form method="POST" novalidate>
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="#" class="social"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
				<a href="#" class="social"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
			</div>
			<span>or use your account</span>
			<input type="text" class="form-control" required name="username" placeholder="Enter username">
      <input type="password" class="form-control" name="password" placeholder="Enter password">
>>>>>>> 7cfaae92b9fc8fc1b576c43dcacd0a9328214e1b
      <?php if (!empty($error_message)) : ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?php echo $error_message; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>
        <input type="submit" value="Sign In" name="signin">
      </div>

    </form>

    <p class="text--center">Not a member? <a href="signup.php">Sign up now</a> <svg class="icon">
        <use xlink:href="#icon-arrow-right"></use>
      </svg></p>

  </div>

  <svg xmlns="http://www.w3.org/2000/svg" class="icons">
    <symbol id="icon-arrow-right" viewBox="0 0 1792 1792">
      <path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z" />
    </symbol>
    <symbol id="icon-lock" viewBox="0 0 1792 1792">
      <path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z" />
    </symbol>
    <symbol id="icon-user" viewBox="0 0 1792 1792">
      <path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z" />
    </symbol>
  </svg>




<!-- This is area is for script -->
<script src="script/login.js"></script>
<script src="./bootstrap-5.3.3-dist/js/bootstrap.js"></script>


</body>
 
 </html>

 