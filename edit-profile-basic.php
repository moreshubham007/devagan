<?php include("php/timeline/timeline.php"); ?>
<?php include("php/profile/edit-basic-profile.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
      .timeline-cover 
      {
          background: url('php/index/usr/<?php echo $cover; ?>') no-repeat;
      }
    </style>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="description"
      content="This is social network html5 template available in themeforest......"
    />
    <meta
      name="keywords"
      content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page"
    />
    <meta name="robots" content="index, follow" />
    <title>Edit Profile | Edit Profile Page</title>

    <!-- Stylesheets
    ================================================= -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />

    <!--Google Font-->
    <link
      href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i"
      rel="stylesheet"
    />
      
    <!--Favicon-->
    <!-- <link rel="shortcut icon" type="image/png" href="images/fav.png"/> -->
  </head>
  <body>
    <!-- Header
    ================================================= -->
    <header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button
              type="button"
              class="navbar-toggle collapsed"
              data-toggle="collapse"
              data-target="#bs-example-navbar-collapse-1"
              aria-expanded="false"
            >
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><span>LOGO</span> </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
              <li class="dropdown">
                <a
                  href="index.php"
                  role="button"
                  aria-haspopup="true"
                  aria-expanded="false"
                  >Home <span></span
                ></a>
              </li>
              <li class="dropdown">
                <a
                  href="#"
                  class="dropdown-toggle"
                  data-toggle="dropdown"
                  role="button"
                  aria-haspopup="true"
                  aria-expanded="false"
                  >Newsfeed <span><img src="images/down-arrow.png" alt=""/></span
                ></a>
                <ul class="dropdown-menu newsfeed-home">
                  <li><a href="newsfeed.html">Newsfeed</a></li>
                  <li><a href="newsfeed-people-nearby.html">Poeple Nearly</a></li>
                  <li><a href="newsfeed-friends.html">My friends</a></li>
                  <li><a href="newsfeed-messages.php">Chatroom</a></li>
                  <li><a href="newsfeed-images.html">Images</a></li>
                  <li><a href="newsfeed-videos.html">Videos</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a
                  href="#"
                  class="dropdown-toggle"
                  data-toggle="dropdown"
                  role="button"
                  aria-haspopup="true"
                  aria-expanded="false"
                  >Timeline <span><img src="images/down-arrow.png" alt=""/></span
                ></a>
                <ul class="dropdown-menu login">
                  <li><a href="timeline.php">Timeline</a></li>
                  <li><a href="timeline-about.html">Timeline About</a></li>
                  <li><a href="edit-profile-basic.php">Edit: Basic Info</a></li>
                  <li><a href="timeline-friends.php">Timeline Friends</a></li>
                  <li><a href="edit-profile-basic.php">Edit: Basic Info</a></li>
                  <li><a href="edit-profile-work-edu.php">Edit: Work</a></li>
                  <li><a href="edit-profile-interests.html">Edit: Interests</a></li>
                  <li><a href="edit-profile-settings.html">Account Settings</a></li>
                  <li><a href="edit-profile-password.php">Change Password</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="poll.html">Poll</a></li>
              <li class="dropdown">
                <a
                  href="#"
                  class="dropdown-toggle pages"
                  data-toggle="dropdown"
                  role="button"
                  aria-haspopup="true"
                  aria-expanded="false"
                  >All Pages <span><img src="images/down-arrow.png" alt=""/></span
                ></a>
                <ul class="dropdown-menu page-list">
                  <li><a href="index.php">Landing Page 1</a></li>
                  <li><a href="index.php">Landing Page 2</a></li>
                  <li><a href="newsfeed.html">Newsfeed</a></li>
                  <li><a href="newsfeed-people-nearby.html">Poeple Nearly</a></li>
                  <li><a href="newsfeed-friends.html">My friends</a></li>
                  <li><a href="newsfeed-messages.php">Chatroom</a></li>
                  <li><a href="newsfeed-images.html">Images</a></li>
                  <li><a href="newsfeed-videos.html">Videos</a></li>
                  <li><a href="timeline.php">Timeline</a></li>
                  <li><a href="timeline-about.html">Timeline About</a></li>
                  <li><a href="edit-profile-basic.php">Edit: Basic Info</a></li>
                  <li><a href="timeline-friends.php">Timeline Friends</a></li>
                  <li><a href="timeline-album.php">Edit Profile</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                </ul>
              </li>
              <!-- <li class="dropdown"><a href="contact.html">Contact</a></li> -->
            </ul>
            <form class="navbar-form navbar-right hidden-sm">
              <div class="form-group">
                <i class="icon ion-android-search"></i>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search friends, photos, videos"
                />
              </div>
            </form>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
      </nav>
    </header>
    <!--Header End-->

    <div class="container">
      <!-- Timeline
      ================================================= -->
      <div class="timeline">
        <div class="timeline-cover">
          <!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row">
              <div class="col-md-3">
                <div class="profile-info">
                  <img
                    src="php/index/usr/<?php echo $profile; ?>"
                    alt=""
                    class="img-responsive profile-photo"
                  />
                  <h3><?php echo "$firstname $lastname" ?></h3>
                  <p class="text-muted"><?php echo $email ?></p>
                </div>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                  <li><a href="timeline.php">Timeline</a></li>
                  <li><a href="timeline-about.html" class="active">About</a></li>
                  <li><a href="timeline-album.php">Album</a></li>
                  <li><a href="timeline-friends.php">Friends</a></li>
                </ul>
                <ul class="follow-me list-inline">
                  <li><?php echo $follower ?> Friends</li>
                </ul>
              </div>
            </div>
          </div>
          <!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
              <img src="php/index/usr/<?php echo $profile; ?>" alt="" class="img-responsive profile-photo" />
              <h4><?php echo "$firstname $lastname" ?></h4>
              <p class="text-muted"><?php echo $email ?></p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                <li><a href="timline.html">Timeline</a></li>
                <li><a href="timeline-about.html" class="active">About</a></li>
                <li><a href="timeline-album.php">Album</a></li>
                <li><a href="timeline-friends.php">Friends</a></li>
              </ul>
              <button class="btn-primary"><a href="timeline-add-friend.php" class="btn-primary">Add Friend</a></button>
            </div>
          </div>
          <!--Timeline Menu for Small Screens End-->
        </div>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3">
              <!--Edit Profile Menu-->
              <ul class="edit-menu">
                <li class="active">
                  <i class="icon ion-ios-information-outline"></i
                  ><a href="timeline-album.php">Basic Information</a>
                </li>
                <li>
                  <i class="icon ion-ios-briefcase-outline"></i
                  ><a href="edit-profile-work-edu.php">Education and Work</a>
                </li>
                <li>
                  <i class="icon ion-ios-heart-outline"></i
                  ><a href="edit-profile-interests.html">My Interests</a>
                </li>
                <li>
                  <i class="icon ion-ios-settings"></i
                  ><a href="edit-profile-settings.html">Account Settings</a>
                </li>
                <li>
                  <i class="icon ion-ios-locked-outline"></i
                  ><a href="edit-profile-password.php">Change Password</a>
                </li>
              </ul>
            </div>
            <div class="col-md-7">
              <!-- Basic Information
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey">
                    <i class="icon ion-android-checkmark-circle"></i>Edit basic information
                  </h4>
                  <div class="line"></div>
                  <h4>Upload</h4>
                  <div class='upload-profile-pic-container'>
                    <input type="file" name="upload-profile-p" id="profile-pics" accept="image/*">
                    <button class='btn-style uploading-profile-pic pro-btn'>
                    Profile
                    </button>
                  </div>
                  <div class='upload-background-pic-container'>
                    <input type="file" name="upload-bg-cov" id="bg-covers" accept="video/*">
                    <button class='btn-style uploading-bg-pic pro-btn'>
                      Background
                    </button>
                  </div>
                  
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <form name="basic-info" id="basic-info" class="form-inline" method="POST">
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="firstname">First name</label>
                        <input
                          id="firstname"
                          value="<?php echo $firstname ?>"
                          class="form-control input-group-lg"
                          type="text"
                          name="firstname"
                          title="Enter first name"
                          placeholder="First name"
                          required
                        />
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="lastname" class="">Last name</label>
                        <input
                          id="lastname"
                          value="<?php echo $lastname ?>"
                          class="form-control input-group-lg"
                          type="text"
                          name="lastname"
                          title="Enter last name"
                          placeholder="Last name"
                          required
                        />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="email">My email</label>
                        <input
                          id="email"
                          value="<?php echo $email ?>"
                          class="form-control input-group-lg"
                          type="text"7
                          name="email"
                          title="You can not update email"
                          placeholder="My Email"
                          required 
                          disabled
                        />
                      </div>
                    </div>
                    <div class="row">
                      <p class="custom-label"><strong>Date of Birth</strong></p>
                      <div class="form-group col-sm-3 col-xs-6">
                        <label for="month" class="sr-only"></label>
                        <select name="day" class="form-control" id="day" required>
                          <option value="day" disabled>Day</option>
                          <?php
                          for ($i=1; $i <=31 ; $i++) {
                            if($i==$day)
                            {
                              echo "<option value='$i' selected>$i</option>";
                            }
                            else
                            {
                              echo "<option value='$i'>$i</option>";
                            }
                          }
                          ?>
                        </select>
                      </div>
                      <div class="form-group col-sm-3 col-xs-6">
                        <label for="month" class="sr-only"></label>
                        <?php $months=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"); ?>
                        <select name="month" class="form-control" id="month" required>
                          <option value="month" disabled>Month</option>
                          <?php for($i=0;$i<12;$i++)
                          {
                            if($months[$i]==$month){
                           ?>
                          <option value="<?php echo $month ?>" selected><?php echo $month ?></option>
                          <?php }
                          else
                          {
                            ?>
                          <option value="<?php echo $months[$i] ?>"><?php echo $months[$i] ?></option>
                            <?php
                          }
                          } ?>
                        </select>
                      </div>
                      <div class="form-group col-sm-6 col-xs-12">
                        <label for="year" class="sr-only"></label>
                        <select name="year" class="form-control" id="year" required>
                          <option value="year" disabled selected>Year</option>
                          <?php
                          $year=date("Y")-5;
                          for ($i=0; $i < 200; $i++) { 
                            if($year==$yr)
                            {
                              echo "<option value='$year' selected>".$year."</option>";
                            }
                            else
                            {
                            echo "<option value='$year'>".$year."</option>";
                            }
                            $year--;
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group gender">
                      <span class="custom-label"><strong>I am a: </strong></span>
                    <?php if($gender=="Male"){ ?>
                      <label class="radio-inline">
                        <input type="radio" name="gender" value="Male" checked />Male
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="gender" value="Female" />Female
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="gender" value="Other" />Other
                      </label>
                    <?php }elseif($gender=="Female"){ ?>
                      <label class="radio-inline">
                        <input type="radio" name="gender" value="Male" />Male
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="gender" value="Female" checked />Female
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="gender" value="Other" />Other
                      </label>
                    <?php }elseif($gender=="Other"){ ?>
                      <label class="radio-inline">
                        <input type="radio" name="gender" value="Male" />Male
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="gender" value="Female" />Female
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="gender" value="Other" checked />Other
                      </label>
                    <?php } ?>
                    </div>
                    <br>
                        <strong>Currnet Address is <?php echo ": $district, $state, $country"; ?></strong>
                        <?php include("php/index/address.php"); ?>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-info">About me</label>
                        <textarea
                          id="my-info"
                          name="about"
                          class="form-control"
                          placeholder="Some texts about me"
                          rows="4"
                          cols="400"
                        ><?php echo $about ?></textarea>
                      </div>
                    </div>
                    <button name="bupdate" class="btn btn-primary">Save Changes</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-2 static">
              <!--Sticky Timeline Activity Sidebar-->
              <div id="sticky-sidebar">
                <h4 class="grey">Your activity</h4>
                <?php foreach ($activity as $act): ?>
                  <div class="feed-item">
                    <div class="live-activity">
                      <p><a href="#" class="profile-link">You </a><?php echo $act['act']; ?></p>
                      <p class="text-muted"><?php echo "Posted on " . date("d-m-Y", $act['actt']); echo "<br> at ".date("h:i:sa",$act['actt']); ?></p>
                    </div>
                  </div>
                <?php endforeach ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer
    ================================================= -->
    <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="footer-wrapper">
            <div class="col-md-3 col-sm-3">
              <a href=""><img src="#" alt="" class="footer-logo"/>LOGO</a>
              <ul class="list-inline social-icons">
                <li>
                  <a href="#"><i class="icon ion-social-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="icon ion-social-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="icon ion-social-googleplus"></i></a>
                </li>
                <li>
                  <a href="#"><i class="icon ion-social-pinterest"></i></a>
                </li>
                <li>
                  <a href="#"><i class="icon ion-social-linkedin"></i></a>
                </li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2">
              <h5>For individuals</h5>
              <ul class="footer-links">
                <li><a href="">Signup</a></li>
                <li><a href="">login</a></li>
                <li><a href="">Explore</a></li>
                <li><a href="">Finder app</a></li>
                <li><a href="">Features</a></li>
                <li><a href="">Language settings</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2">
              <h5>For businesses</h5>
              <ul class="footer-links">
                <li><a href="">Business signup</a></li>
                <li><a href="">Business login</a></li>
                <li><a href="">Benefits</a></li>
                <li><a href="">Resources</a></li>
                <li><a href="">Advertise</a></li>
                <li><a href="">Setup</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2">
              <h5>About</h5>
              <ul class="footer-links">
                <li><a href="">About us</a></li>
                <li><a href="">Contact us</a></li>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Terms</a></li>
                <li><a href="">Help</a></li>
              </ul>
            </div>
            <div class="col-md-3 col-sm-3">
              <h5>Contact Us</h5>
              <ul class="contact">
                <li><i class="icon ion-ios-telephone-outline"></i>+91 123-456-789-0</li>
                <li><i class="icon ion-ios-email-outline"></i>Example@mail.com</li>
                <li><i class="icon ion-ios-location-outline"></i>Address</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright">
        <p>Tech Initiative Team © 2020. All rights reserved</p>
      </div>
    </footer>

    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>

    <!-- Scripts
    ================================================= -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/script2.js"></script>
  </body>
</html>
