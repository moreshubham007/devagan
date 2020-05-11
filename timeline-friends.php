<?php include("php/timeline/timeline.php"); ?>
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
    <title>My Friends | Your Friend List</title>

    <!-- Stylesheets
    ================================================= -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style2.css" />
    <link rel="stylesheet" href="css/timeline.css" />
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
              <li class="dropdown"><a href="poll.html">Poll</a></li>
              <li class="dropdown"><a href="contact.html">Contact</a></li>
              <li class="dropdown"><a href="php/index/logout.php">Logout</a></li>
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
                  <p class="text-muted"><?php echo "$email"; ?></p>
                </div>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                  <li><a href="timeline.php">Timeline</a></li>
                  <li><a href="timeline-about.html">About</a></li>
                  <li><a href="timeline-album.php">Album</a></li>
                  <li><a href="timeline-friends.php" class="active">Friends</a></li>
                </ul>
                <ul class="follow-me list-inline">
                  <li><?php echo $follower ?> Friends</li>
                  <li>
                    <a href="timeline-add-friend.php" class="add-friend">Add Friend</a>
                  </li>
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
              <p class="text-muted"><?php echo "$email"; ?></p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                <li><a href="timeline.php">Timeline</a></li>
                <li><a href="timeline-about.html">About</a></li>
                <li><a href="timeline-album.php">Album</a></li>
                <li><a href="timeline-friends.php" class="active">Friends</a></li>
              </ul>
              <button class="btn-primary"><a href="timeline-add-friend.php" class="btn-primary">Add Friend</a></button>
            </div>
          </div>
          <!--Timeline Menu for Small Screens End-->
        </div>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">
              <!-- Friend List
              ================================================= -->
              <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Requests</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')">Your Friends</button>
              </div>

              <div class="friend-list">
                <div id="London" class="tabcontent">
                <div class="row">
                  <!-- <h1>Request</h1> -->
                  <?php foreach ($frireq as $freq): ?>
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img
                        src="<?php requsrinfo("cover",$freq['uid']) ?>"
                        alt="profile-cover"
                        class="img-responsive cover"
                      />
                      <div class="card-info">
                        <img
                          src="<?php requsrinfo("profile",$freq['uid']) ?>"
                          alt="user"
                          class="profile-photo-lg"
                        />
                        <div class="friend-info">
                          <button class="pull-right text-green" id="addf<?php echo $freq['sr'] ?>delete" type="button" onclick="addFri(<?php echo $freq['sr'] ?>,'delete')">Delete</button>
                          <button class="pull-right text-green" id="addf<?php echo $freq['sr'] ?>confirm" type="button" onclick="addFri(<?php echo $freq['sr'] ?>,'confirm')">Confirm</button>
                          <h5>
                            <a href="timeline.php" class="profile-link">
                            <?php requsrinfo("firstname, lastname",$freq['uid']) ?>
                            </a>
                          </h5>
                          <p><?php requsrinfo("district",$freq['uid']) ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php endforeach ?>


                </div>
                </div>

                  <div id="Paris" class="tabcontent">
                  <div class="row">
                  <!-- <h1>Your Friends</h1> -->
                  <?php foreach ($friappr as $fapr): ?>
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img
                        src="<?php requsrinfo("cover",$fapr['uid']) ?>"
                        alt="profile-cover"
                        class="img-responsive cover"
                      />
                      <div class="card-info">
                        <img
                          src="<?php requsrinfo("profile",$fapr['uid']) ?>"
                          alt="user"
                          class="profile-photo-lg"
                        />
                        <div class="friend-info">
                          <button class="pull-right text-green" id="addf<?php echo $fapr['sr'] ?>delete" type="button" onclick="addFri(<?php echo $fapr['sr'] ?>,'delete')">Delete</button>
                          <h5>
                            <a href="timeline.php" class="profile-link">
                            <?php requsrinfo("firstname, lastname",$fapr['uid']) ?>
                            </a>
                          </h5>
                          <p><?php requsrinfo("district",$fapr['uid']) ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php endforeach ?>

                </div>
                </div>

              </div>
            </div>
            <div class="col-md-2 static">
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

    <!-- Scripts
    ================================================= -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/timeline.js"></script>
  </body>
</html>
