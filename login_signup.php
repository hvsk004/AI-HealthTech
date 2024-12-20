<?php
session_start(); // Start the session

// Check if the user is already logged in
if (isset($_SESSION['user_id'])) {
  // Redirect to dashboard if logged in
  header("Location: dashboard.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <!-- jQuery and jQuery Validation -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
  <!-- Fonts and Icons -->
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" />
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/login_signup.css" />
  <style>
    /* Optional CSS to initially hide the signup form */
    #second {
      display: none;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-5 mx-auto">
        <div id="first">
          <div class="myform form">
            <div class="logo mb-3">
              <div class="col-md-12 text-center">
                <h1>Login</h1>
              </div>
            </div>
            <form action="login.php" method="post" name="login">
              <div class="form-group">
                <label for="loginEmail">Email address</label>
                <input type="email" name="email" class="form-control" id="loginEmail" placeholder="Enter email" />
              </div>
              <div class="form-group">
                <label for="loginPassword">Password</label>
                <input type="password" name="password" class="form-control" id="loginPassword"
                  placeholder="Enter Password" />
              </div>
              <div class="form-group">
                <p class="text-center">
                  By signing up you accept our <a href="#">Terms Of Use</a>
                </p>
              </div>
              <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-block mybtn btn-primary tx-tfm">
                  Login
                </button>
              </div>
              <div class="col-md-12">
                <div class="login-or">
                  <hr class="hr-or" />
                  <span class="span-or">or</span>
                </div>
              </div>
              <div class="form-group">
                <p class="text-center">
                  Don't have an account?
                  <a href="#" id="signup">Sign up here</a>
                </p>
              </div>
            </form>
          </div>
        </div>

        <div id="second">
          <div class="myform form">
            <div class="logo mb-3">
              <div class="col-md-12 text-center">
                <h1>Signup</h1>
              </div>
            </div>
            <form action="signup.php" method="post" name="registration">
              <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter Firstname"
                  required />
              </div>
              <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter Lastname"
                  required />
              </div>
              <div class="form-group">
                <label for="signupEmail">Email address</label>
                <input type="email" name="email" class="form-control" id="signupEmail" placeholder="Enter email"
                  required />
              </div>
              <div class="form-group">
                <label for="signupPhone">Phone Number</label>
                <input type="text" name="phone" class="form-control" id="signupPhone"
                  placeholder="Enter Phone Number" />
              </div>
              <div class="form-group">
                <label for="signupDob">Date of Birth</label>
                <input type="date" name="dob" class="form-control" id="signupDob" />
              </div>
              <div class="form-group">
                <label for="signupPassword">Password</label>
                <input type="password" name="password" class="form-control" id="signupPassword"
                  placeholder="Enter Password" />
              </div>
              <div class="col-md-12 text-center mb-3">
                <button type="submit" class="btn btn-block mybtn btn-primary tx-tfm">
                  Get Started For Free
                </button>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <p class="text-center">
                    <a href="#" id="signin">Already have an account?</a>
                  </p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function () {
      $("#signup").click(function () {
        $("#first").hide();
        $("#second").show();
      });
      $("#signin").click(function () {
        $("#second").hide();
        $("#first").show();
      });
    });
  </script>
</body>

</html>