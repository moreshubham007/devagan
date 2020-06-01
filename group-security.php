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
    <title>Edit Profile | Change My Password</title>

    <!-- Stylesheets
    ================================================= -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style2.css" />
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
                  <li><a href="timeline-album.php">Timeline Album</a></li>
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
                  <li><a href="timeline-album.php">Edit: Basic Info</a></li>
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
                  <p class="text-muted"><?php echo $about ?></p>
                </div>
              </div>
              <div class="col-md-9">
              <ul class="list-inline profile-menu">
                  <li><a href="group-timeline.php">Timeline</a></li>
                  <li><a href="group-timeline-friends.php">Members</a></li>
                  <li><a href="group-timeline-album.php">Album</a></li>
                  <li><a href="group-edit-profile-basic.php" class="active">Manage</a></li>
                  <li><a href="group-timeline-about.html">About</a></li>
                </ul>
                <ul class="follow-me list-inline">
                  <li><?php echo $follower ?> Members</li>
                </ul>
              </div>
            </div>
          </div>
          <!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
              <img src="php/index/usr/<?php echo $profile; ?>" alt="" class="img-responsive profile-photo" />
              <h4><?php echo "$firstname $lastname"; ?></h4>
              <p class="text-muted"><?php echo $about ?></p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
              <li><a href="group-timeline.php">Timeline</a></li>
                  <li><a href="group-timeline-friends.php">Members</a></li>
                  <li><a href="group-timeline-album.php">Album</a></li>
                  <li><a href="group-edit-profile-basic.php" class="active">Manage</a></li>
                  <li><a href="group-timeline-about.html">About</a></li>
                </ul>
                <ul class="follow-me list-inline">
                  <li><?php echo $follower ?> Members</li>
                </ul>
            </div>
          </div>
          <!--Timeline Menu for Small Screens End-->
        </div>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3">
              <!--Edit Profile Menu-->
              <ul class="edit-menu">
                <li>
                  <i class="icon ion-ios-information-outline"></i
                  ><a href="group-edit-profile-basic.php">Basic Information</a>
                </li>
                <li>
                  <i class="icon ion-ios-people"></i
                  ><a href="manage-members.php">Manage</a>
                </li>
                <li class="active">
                  <i class="icon ion-ios-locked-outline"></i
                  ><a href="group-security.php">Security</a>
                </li>
              </ul>
            </div>
            <div class="col-md-7">
              <!-- Change Password
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-locked-outline"></i>Group Security</h4>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <form name="update-pass" id="education" class="form-inline" method="POST">
                    <div class="row">
                      <div class="form-group col-xs-12">

                        <label for="my-password" class='group-security-heading'>Who can see my Email?</label>
                        <div class="radio-options-container">
                          <div>

                            <p>
                              <input type="radio" id="email-privacy1" name="radio-group" checked>
                              <label for="email-privacy1" class='group-security-headings'>Everyone</label>
                            </p>
                            <p>
                              <input type="radio" id="email-privacy2" name="radio-group">
                              <label for="email-privacy2" class='group-security-headings'>Only Friends</label>
                            </p>
                            <p>
                              <input type="radio" id="email-privacy3" name="radio-group">
                              <label for="email-privacy3" class='group-security-headings'>Nobody</label>
                            </p>
                          </div>

                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-xs-12">

                        <label for="my-password" class='group-security-heading'>Who can see my Members?</label>
                        <div class="radio-options-container">
                          <div>

                            <p>
                              <input type="radio" id="member-privacy1" name="member-radio-group" checked>
                              <label for="member-privacy1" class='group-security-headings'>Everyone</label>
                            </p>
                            <p>
                              <input type="radio" id="member-privacy2" name="member-radio-group">
                              <label for="member-privacy2" class='group-security-headings'>Only Friends</label>
                            </p>
                            <p>
                              <input type="radio" id="member-privacy3" name="member-radio-group">
                              <label for="member-privacy3" class='group-security-headings'>Nobody</label>
                            </p>
                          </div>

                        </div>
                      </div>
                    </div>

                    <div class='delete-page-container'>
                      <h4>Delete Group</h4>
                      <div class='line'></div>
                      <span>This Will <span style='color:red;'>Permanantly</span> Delete All Your Group Data.</span>
                      <button class='delete-group-btn'>Delete</button>
                    </div>

                    <div class='delete-page-pop-up-container'>
                      <div class="delete-page-pop-up-message">Are you sure you want to delete this?</div>
                      <div class='delete-page-btn-container'>
                      <a href="#" class='delete-page-btn delete-option-yes'>yes</a>
                      <a href="#" class='delete-page-btn delete-option-no'>no</a>
                      </div>
                    </div>

                    <div class='delete-page-pop-up-container2'>
                      <span class='ion ion-close delete-page-close-icon'></span>
                      <div class="delete-page-pop-up-message">Enter Your Password To Delete This Group <span style='color:red;'>Permanantly.</span></div>
                      <div class="pswd-contanr">
                      <input type="password" placeholder='Your account password.' required/>
                      </div>
                      <div class='delete-page-btn-container2'>
                      <a href="#" class='delete-page-btn delete-option-permanently'>Delete My Group</a>
                      </div>
                    </div>
                    <div class='delete-page-disable-bg'></div>




                    <button name="upass" value="<?php requsrinfo('pass',$id); ?>" class="btn btn-primary">Save Updates</button>
                  </form>
                </div>
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
