<?php include("php/timeline/timeline.php"); ?>
<?php include('php/timeline/addfriend.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
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
    <title>Chatroom | Send and Receive Messages</title>

    <!-- Stylesheets
    ================================================= -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/jquery.scrollbar.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="css/emoji.css" rel="stylesheet" />

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

    <div id="page-contents">
      <div class="container">
        <div class="row">
          <!-- Newsfeed Common Side Bar Left
          ================================================= -->
          <div class="col-md-3 static">
            <div class="profile-card">
              <img src="http://placehold.it/300x300" alt="user" class="profile-photo" />
              <h5><a href="timeline.php" class="text-white">Sarah Cruiz</a></h5>
              <a href="#" class="text-white"
                ><i class="ion ion-android-person-add"></i> 1,299 followers</a
              >
            </div>
            <!--profile card ends-->
            <ul class="nav-news-feed">
              <li>
                <i class="icon ion-ios-paper"></i>
                <div><a href="newsfeed.html">My Newsfeed</a></div>
              </li>
              <li>
                <i class="icon ion-ios-people"></i>
                <div><a href="newsfeed-people-nearby.html">People Nearby</a></div>
              </li>
              <li>
                <i class="icon ion-ios-people-outline"></i>
                <div><a href="newsfeed-friends.html">Friends</a></div>
              </li>
              <li>
                <i class="icon ion-chatboxes"></i>
                <div><a href="newsfeed-messages.php">Messages</a></div>
              </li>
              <li>
                <i class="icon ion-images"></i>
                <div><a href="newsfeed-images.html">Images</a></div>
              </li>
              <li>
                <i class="icon ion-ios-videocam"></i>
                <div><a href="newsfeed-videos.html">Videos</a></div>
              </li>
            </ul>
            <!--news-feed links ends-->
            <div id="chat-block">
              <div class="title">Chat online</div>
              <ul class="online-users list-inline">
                <li>
                  <a href="newsfeed-messages.php" title="Linda Lohan"
                    ><img
                      src="http://placehold.it/300x300"
                      alt="user"
                      class="img-responsive profile-photo"/><span class="online-dot"></span
                  ></a>
                </li>
                <li>
                  <a href="newsfeed-messages.php" title="Sophia Lee"
                    ><img
                      src="http://placehold.it/300x300"
                      alt="user"
                      class="img-responsive profile-photo"/><span class="online-dot"></span
                  ></a>
                </li>
                <li>
                  <a href="newsfeed-messages.php" title="John Doe"
                    ><img
                      src="http://placehold.it/300x300"
                      alt="user"
                      class="img-responsive profile-photo"/><span class="online-dot"></span
                  ></a>
                </li>
                <li>
                  <a href="newsfeed-messages.php" title="Alexis Clark"
                    ><img
                      src="http://placehold.it/300x300"
                      alt="user"
                      class="img-responsive profile-photo"/><span class="online-dot"></span
                  ></a>
                </li>
                <li>
                  <a href="newsfeed-messages.php" title="James Carter"
                    ><img
                      src="http://placehold.it/300x300"
                      alt="user"
                      class="img-responsive profile-photo"/><span class="online-dot"></span
                  ></a>
                </li>
                <li>
                  <a href="newsfeed-messages.php" title="Robert Cook"
                    ><img
                      src="http://placehold.it/300x300"
                      alt="user"
                      class="img-responsive profile-photo"/><span class="online-dot"></span
                  ></a>
                </li>
                <li>
                  <a href="newsfeed-messages.php" title="Richard Bell"
                    ><img
                      src="http://placehold.it/300x300"
                      alt="user"
                      class="img-responsive profile-photo"/><span class="online-dot"></span
                  ></a>
                </li>
                <li>
                  <a href="newsfeed-messages.php" title="Anna Young"
                    ><img
                      src="http://placehold.it/300x300"
                      alt="user"
                      class="img-responsive profile-photo"/><span class="online-dot"></span
                  ></a>
                </li>
                <li>
                  <a href="newsfeed-messages.php" title="Julia Cox"
                    ><img
                      src="http://placehold.it/300x300"
                      alt="user"
                      class="img-responsive profile-photo"/><span class="online-dot"></span
                  ></a>
                </li>
              </ul>
            </div>
            <!--chat block ends-->
          </div>

          <div class="col-md-7">
            <!-- Post Create Box
            ================================================= -->
            <div class="create-post">
              <div class="row">
                <div class="col-md-7 col-sm-7">
                  <div class="form-group">
                    <img src="http://placehold.it/300x300" alt="" class="profile-photo-md" />
                    <textarea
                      name="texts"
                      id="exampleTextarea"
                      cols="30"
                      rows="1"
                      class="form-control"
                      placeholder="Write what you wish"
                    ></textarea>
                  </div>
                </div>
                <div class="col-md-5 col-sm-5">
                  <div class="tools">
                    <ul class="publishing-tools list-inline">
                      <li>
                        <a href="#"><i class="ion-compose"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="ion-images"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="ion-ios-videocam"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="ion-map"></i></a>
                      </li>
                    </ul>
                    <button class="btn btn-primary pull-right">Publish</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Post Create Box End -->

            <!-- Chat Room
            ================================================= -->
            <div class="chat-room">
              <div class="row">
                <div class="col-md-5">
                  <!-- Contact List in Left-->
                  <ul class="nav nav-tabs contact-list scrollbar-wrapper scrollbar-outer">


                    <li class="active">
                      <a href="#contact-1" data-toggle="tab">
                        <div class="contact">
                          <img
                            src="http://placehold.it/300x300"
                            alt=""
                            class="profile-photo-sm pull-left"
                          />
                          <div class="msg-preview">
                            <h6>Linda Lohan</h6>
                            <p class="text-muted">Hi there, how are you</p>
                            <small class="text-muted">a min ago</small>
                            <div class="chat-alert">1</div>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                  <!--Contact List in Left End-->
                </div>
                <div class="col-md-7">
                  <!--Chat Messages in Right-->
                  <div class="tab-content scrollbar-wrapper wrapper scrollbar-outer">


                    <div class="tab-pane active" id="contact-1">
                      <div class="chat-body">
                        <ul class="chat-message">
                          <li class="left">
                            <img
                              src="http://placehold.it/300x300"
                              alt=""
                              class="profile-photo-sm pull-left"
                            />
                            <div class="chat-item">
                              <div class="chat-item-header">
                                <h5>Linda Lohan</h5>
                                <small class="text-muted">3 days ago</small>
                              </div>
                              <p>
                                Hi honey, how are you doing???? Long time no see. Where have you
                                been?
                              </p>
                            </div>
                          </li>
                          <li class="right">
                            <img
                              src="http://placehold.it/300x300"
                              alt=""
                              class="profile-photo-sm pull-right"
                            />
                            <div class="chat-item">
                              <div class="chat-item-header">
                                <h5>Sarah Cruiz</h5>
                                <small class="text-muted">3 days ago</small>
                              </div>
                              <p>I have been on vacation</p>
                            </div>
                          </li>
                          <li class="right">
                            <img
                              src="http://placehold.it/300x300"
                              alt=""
                              class="profile-photo-sm pull-right"
                            />
                            <div class="chat-item">
                              <div class="chat-item-header">
                                <h5>Sarah Cruiz</h5>
                                <small class="text-muted">3 days ago</small>
                              </div>
                              <p>
                                it was a great time for me. we had a lot of fun
                                <i class="em em-blush"></i>
                              </p>
                            </div>
                          </li>
                          <li class="left">
                            <img
                              src="http://placehold.it/300x300"
                              alt=""
                              class="profile-photo-sm pull-left"
                            />
                            <div class="chat-item">
                              <div class="chat-item-header">
                                <h5>Linda Lohan</h5>
                                <small class="text-muted">3 days ago</small>
                              </div>
                              <p>
                                that's cool I wish I were you <i class="em em-expressionless"></i>
                              </p>
                            </div>
                          </li>
                          <li class="right">
                            <img
                              src="http://placehold.it/300x300"
                              alt=""
                              class="profile-photo-sm pull-right"
                            />
                            <div class="chat-item">
                              <div class="chat-item-header">
                                <h5>Sarah Cruiz</h5>
                                <small class="text-muted">3 days ago</small>
                              </div>
                              <p><i class="em em-hand"></i></p>
                            </div>
                          </li>
                          <li class="left">
                            <img
                              src="http://placehold.it/300x300"
                              alt=""
                              class="profile-photo-sm pull-left"
                            />
                            <div class="chat-item">
                              <div class="chat-item-header">
                                <h5>Linda Lohan</h5>
                                <small class="text-muted">a min ago</small>
                              </div>
                              <p>Hi there, how are you</p>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--Chat Messages in Right End-->
                  <div class="send-message">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Type your message" />
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Send</button>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>

          <!-- Newsfeed Common Side Bar Right
          ================================================= -->
          <div class="col-md-2 static">
            <div class="suggestions" id="sticky-sidebar">
              <h4 class="grey">Who to Follow</h4>
              <div class="follow-user">
                <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="timeline.php">Diana Amber</a></h5>
                  <a href="#" class="text-green">Add friend</a>
                </div>
              </div>
              <div class="follow-user">
                <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="timeline.php">Cris Haris</a></h5>
                  <a href="#" class="text-green">Add friend</a>
                </div>
              </div>
              <div class="follow-user">
                <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="timeline.php">Brian Walton</a></h5>
                  <a href="#" class="text-green">Add friend</a>
                </div>
              </div>
              <div class="follow-user">
                <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="timeline.php">Olivia Steward</a></h5>
                  <a href="#" class="text-green">Add friend</a>
                </div>
              </div>
              <div class="follow-user">
                <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="timeline.php">Sophia Page</a></h5>
                  <a href="#" class="text-green">Add friend</a>
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
                <li><i class="icon ion-ios-telephone-outline"></i>+91 123-456-789-0</>
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
  </body>
</html>
