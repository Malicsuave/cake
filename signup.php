


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up</title>
    <!-- Link for SCSS -->
    <link rel="stylesheet" href="./bootstrap-4.5.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="styling/style.scss">
   
    <!-- Link for font-awesome -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">



</head>
<body>

<div class="form_wrapper">
  <div class="form_container">
    <div class="title_container">
      <h2>Sign-Up and Choose your Cake</h2>
    </div>

   
   
      <div class="">
        
        <form action="" method="post" enctype="multipart/form-data" id="signup-form" novalidate>
        <div class="form-step form-step-active" id="step-1">
        <div class="input_field"> 
            <span><i aria-hidden="true" class="fa fa-user"></i></span>
            <input type="email" name="username" placeholder="Username" class="form-control" id="username" required />
            <div class="valid-feedback">Looks good!</div>
            <div class="invalid-feedback">Please enter a valid username.</div>
            <div id="usernameFeedback" class="invalid-feedback"></div>
          </div>
          <div class="input_field"> 
            <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
            <input type="email" name="email" placeholder="Email" class="form-control" id="email" required >
            <div class="valid-feedback">Looks good!</div>
            <div class="invalid-feedback">Please enter a valid email.</div>
            <div id="emailFeedback" class="invalid-feedback"></div>
          </div>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="password" name="password" placeholder="Password" required >
            <div class="valid-feedback">Looks good!</div>
            <div class="invalid-feedback">Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, and one special character.</div>
         
          </div>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="password" name="cpassword" placeholder="Re-type Password" required>
            <div class="valid-feedback">Looks good!</div>
            <div class="invalid-feedback">Please confirm your password.</div>
          </div>


        
          <input class="button" type="submit" value="Next" />
</div>


<div class="input_field">
        <span><i aria-hidden="true" class="fa fa-venus-mars"></i></span>
        <select class="form-control" name="sex" id="sex" required>
            <option selected disabled value="">Select Sex</option>
            <option>Male</option>
            <option>Female</option>
        </select>
        <div class="valid-feedback">Looks good!</div>
        <div class="invalid-feedback">Please select a sex.</div>
    </div>
              
          
          
        </form>
            </div>    
            </div>
        </div>
    </div>
    </div>
    </div>
    

<p class="credit">Developed by <a  target="_blank">Marga's Cake</a></p>


<script src="/script/login.js"></script>
<script src="/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>