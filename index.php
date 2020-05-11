<?php
session_start();
if(isset($_SESSION['id']))
{
          ?>
          <script type="text/javascript">
            window.location.href="timeline.php";
          </script>
          <?php
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is social network html5 template available in themeforest......" />
    <meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
    <meta name="robots" content="index, follow" />
    <title>Devagan | A Complete Social Network</title>

    <!-- Stylesheets
    ================================================= -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
  </head>
  <body>

    <!-- Header
    ================================================= -->
    <header id="header-inverse">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="#" alt="" />LOGO</a>
          </div>
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->
    
    <!-- Landing Page Contents
    ================================================= -->
    <div id="lp-register">
      <div class="container wrapper">
        <!-- Login Message for PHP 
        =========================================================================== -->
        <div class="login-msg-container">
          <?php
          if(isset($_SESSION['msg']))
          {
            if($_SESSION['msg']==10)
            {
              ?>
              <div class="login-msg-true">Registration Successful! You can login now...</div>
              <?php
              session_unset();
              session_destroy();
            }
            elseif($_SESSION['msg']==20)
            {
              ?>
              <div class="login-msg-false">Registration Failed! Because email Already Registered.</div>
              <?php
              session_unset();
              session_destroy();
            }
            elseif($_SESSION['msg']==30)
            {
              ?>
              <div class="login-msg-false">
              Invalid Username or Password !
              </div>
              <?php
              session_unset();
              session_destroy();
            }
            elseif($_SESSION['msg']==40)
            {
              ?>
              <div class="login-msg-false">No Data found</div>
              <?php
              session_unset();
              session_destroy();
            }
          }
          ?>
        </div>
        <!--========================================================================= 
          Login Message for PHP -->
        <div class="row">
          <div class="col-sm-5">
            <div class="intro-texts">
              <h1 class="text-white">Make Cool Friends !!!</h1>
              <p>Devagan is a social network that can be used to connect people. The template offers Landing pages, News Feed, Image/Video Feed, Chat Box, Timeline and lot more. <br /> <br />Why are you waiting for? Register now.</p>
              <button class="btn btn-primary">Learn More</button>
            </div>
          </div>
          <div class="col-sm-6 col-sm-offset-1">
            <div class="reg-form-container"> 
            
              <!-- Register/Login Tabs-->
              <div class="reg-options">
                <ul class="nav nav-tabs">
                  <li><a href="#register" data-toggle="tab">Register</a></li>
                  <li class="active"><a href="#login" data-toggle="tab">Login</a></li>
                </ul><!--Tabs End-->
              </div>
              
              <!--Registration Form Contents-->
              <div class="tab-content">
                <div class="tab-pane" id="register">
                  <h3>Register Now !!!</h3>
                  <p class="text-muted">Be cool and join today. Meet millions</p>
                  
                  <!--Register Form-->
                  <form action="php/index/verify.php" method="POST" name="registration_form" id='registration_form' class="form-inline">
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="firstname" class="sr-only">First Name</label>
                        <input id="firstname" class="form-control input-group-lg" type="text" name="firstname" title="Enter first name" placeholder="First name" / required>
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="lastname" class="sr-only">Last Name</label>
                        <input id="lastname" class="form-control input-group-lg" type="text" name="lastname" title="Enter last name" placeholder="Last name"/ required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="email" class="sr-only">Email</label>
                        <input id="email" class="form-control input-group-lg" type="text" name="email" title="Enter Email" placeholder="Your Email"/ required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" class="form-control input-group-lg" type="password" name="password" title="Enter password" minlength="8" placeholder="Password"/ required>
                      </div>
                    </div>
                    
                    <div class="row">
                      <p class="birth"><strong>Date of Birth</strong></p>
                      <div class="form-group col-sm-3 col-xs-6">
                        <label for="month" class="sr-only"></label>
                        <select name="day" class="form-control" id="day" required>
                          <option value="day" disabled selected>Day</option>
                          <?php
                          for ($i=1; $i <=31 ; $i++) {
                            echo "<option value='$i'>$i</option>";
                          }
                          ?>
                        </select>
                      </div>
                      <div class="form-group col-sm-3 col-xs-6">
                        <label for="month" class="sr-only"></label>
                        <select name="month" class="form-control" id="month" required>
                          <option value="month" disabled selected>Month</option>
                          <option value="Jan">Jan</option>
                          <option value="Feb">Feb</option>
                          <option value="Mar">Mar</option>
                          <option value="Apr">Apr</option>
                          <option value="May">May</option>
                          <option value="Jun">Jun</option>
                          <option value="Jul">Jul</option>
                          <option value="Aug">Aug</option>
                          <option value="Sep">Sep</option>
                          <option value="Oct">Oct</option>
                          <option value="Nov">Nov</option>
                          <option value="Dec">Dec</option>
                        </select>
                      </div>
                      <div class="form-group col-sm-6 col-xs-12">
                        <label for="year" class="sr-only"></label>
                        <select name="year" class="form-control" id="year" required>
                          <option value="year" disabled selected>Year</option>
                          <?php
                          $year=date("Y")-8;
                          for ($i=0; $i < 200; $i++) { 
                            echo "<option value='$year'>".$year."</option>";
                            $year--;
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group gender">
                      <label class="radio-inline">
                        <input type="radio" name="gender" value="Male" checked>Male
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="gender" value="Female" >Female
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="gender" value="Other">Others
                      </label>
                    </div>
                        <?php include("php/index/address.php"); ?>
                        <button name="register" class="btn btn-primary">Register Now</button>
                  </form><!--Register Now Form Ends-->
                  <p><a href="index.php">Already have an account?</a></p>
                </div><!--Registration Form Contents Ends-->
                
                <!--Login-->
                <div class="tab-pane active" id="login">
                  <h3>Login</h3>
                  <p class="text-muted">Log into your account</p>
                  
                  <!--Login Form-->
                  <form action="php/index/verify.php" method="POST" name="Login_form" id='Login_form'>
                     <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-email" class="sr-only">Email</label>
                        <input id="my-email" class="form-control input-group-lg" type="name" name="email" title="Enter Email" placeholder="Your Email" autocomplete="off"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-password" class="sr-only">Password</label>
                        <input id="my-password" class="form-control input-group-lg" minlength="8" type="password" name="password" title="Enter password" placeholder="Password" autocomplete="off"/>
                      </div>
                    </div>
                  <button name="login" value="login" class="btn btn-primary">Login Now</button>
                  </form><!--Login Form Ends--> 
                  <p><a href="#">Forgot Password?</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-sm-offset-6">
          
            <!--Social Icons-->
            <ul class="list-inline social-icons">
              <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
              <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
              <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
              <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
              <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>

    <!-- Scripts
    ================================================= -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.appear.min.js"></script>
    <script src="js/jquery.incremental-counter.js"></script>
    <script src="js/script.js"></script>
    
  </body>
</html>
