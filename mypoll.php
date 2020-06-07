<!DOCTYPE html>
<?php include("php/timeline/timeline.php"); ?>
<?php include("php/poll/poll.php"); ?>
<?php include("php/timeline/addfriend.php"); ?>

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
    <title>Poll | Select the correct one!</title>

    <!-- Stylesheets
    ================================================= -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style2.css" />
    <link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="css/emoji.css" rel="stylesheet" />
    
    <!--Google Font-->
    <link
      href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i"
      rel="stylesheet"
    />
    <!-- Icons -->
    <link
      href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
    />

    <!--Favicon-->
    <!-- <link rel="shortcut icon" type="image/png" href="images/fav.png" /> -->
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
            <a class="navbar-brand" href="index.php"
              ><a class="navbar-brand" href="index.php"><span>LOGO</span> </a></a
            >
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
              <li class="dropdown"><a href="poll.php">Poll</a></li>
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
              <img src="php/index/usr/<?php echo $profile; ?>" alt="user" class="profile-photo" />
              <h5><a href="timeline.php" class="text-white"><?php echo "$firstname $lastname"; ?></a></h5>
              <a href="#" class="text-white"
                ><i class="ion ion-android-person-add"></i> <?php echo "$follower"; ?> followers</a
              >
            </div>
            <!--profile card ends-->
            <ul class="nav-news-feed">
              <li>
                <i class="fa fa-bar-chart"></i>
                <div><a href="mypoll.php">My Poll</a></div>
              </li>
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
            <div class="create-post post-width">
              <form method="POST" action="php/poll/poll.php">
              <div class="row">
                <div class="col-md-7 col-sm-7">
                  <div class="form-group">
                    <img src="php/index/usr/<?php echo $profile; ?>" alt="" class="profile-photo-md" />
                    <textarea
                      name="title"
                      id="title"
                      cols="30"
                      rows="1"
                      class="form-control"
                      placeholder="Write what you wish"
                      required
                    ></textarea>
                  </div>
                </div>
                <div class="">
                  <div class="tools">
                    <button
                      class="btn btn-primary publish-poll"
                      title="publish your poll"
                      name="publish"
                    >
                      Publish
                    </button>
                    <p
                      id="addOpt"
                      onclick="addOpt()"
                      class="btn btn-primary pull-right create-poll"
                      title="create options for your poll"
                    >
                      + Add Option
                    </p>
                    <p
                      id="hideOpt"
                      onclick="hideOpt()"
                      style="display: none;"
                      class="btn btn-primary pull-right create-poll"
                      title="create options for your poll"
                    >
                     X Cancle
                    </p>

                  </div>
                </div>
                <div id="dispOpt" style="display: none;" class="answers opt-col">
                  <!-- <div class="poll-options"> -->
                    <!-- <ol class="poll-items"> -->
                      <li>A 
                        <input name="aopt" id="aopt" type="text" class="option" placeholder="Write Something Here" />
                      </li>

                      <li id="opt2">B
                        <input name="bopt" id="bopt" type="text" class="option" placeholder="Write Something Here" /> 
                        <span class="pull-right add" style="padding-right: 30px;" id="opt2add" onclick="addopt('opt3')">+</span>
                      </li>

                      <div id="opt3" style="display: none;">
                      <li>C
                        <input name="copt" id="copt" type="text" class="option" placeholder="Write Something Here" /> 
                        <span class="pull-right remove" id="opt3rem" onclick="delopt('opt3')">-</span> 
                        <span class="pull-right add" id="opt3add" onclick="addopt('opt4')">+</span>
                      </li>
                      </div>

                      <div id="opt4" style="display: none;">
                      <li>D
                        <input name="dopt" id="dopt" type="text" class="option" placeholder="Write Something Here" /> 
                        <span class="pull-right remove" id="opt4rem" onclick="delopt('opt4')">-</span> 
                        <span class="pull-right add" id="opt4add" onclick="addopt('opt5')">+</span>
                      </li>
                      </div>

                      <div id="opt5" style="display: none;">
                      <li>E
                        <input name="eopt" id="eopt" type="text" class="option" placeholder="Write Something Here" /> 
                        <span id="opt4rem" class="remove" onclick="delopt('opt5')">-</span>
                      </li>
                      </div>
                    <!-- </ol> -->
                  <!-- </div> -->
                </div>
              </div>
              </form>
              <?php
              if($_SESSION['pollmsg']=="ok")
              {
              ?>
              <div class="login-msg-true">Poll successfully Created</div>
              <?php
              $_SESSION['pollmsg']="not";
              }
              ?>
            </div>

            <!-- Post Create Box End-->

            <!-- Post Content
            ================================================= -->
            <?php foreach($userpoll as $upoll){ ?>
            <div class="post-content">
              <div class="post-container">
                <img
                  src="php/index/usr/<?php echo $profile; ?>"
                  alt="user"
                  class="profile-photo-md pull-left"
                />
                <div class="post-detail">
                  <div class="user-info">
                    <h5>
                      <a href="timeline.php" class="profile-link"><?php echo "$firstname $lastname" ?></a>
                      <span class="following"></span>
                    </h5>
                    <p class="text-muted">Published a poll on <?php echo date("d-m-Y", $upoll['date_time'])." at ".date("h:i a",$upoll['date_time']); ?>
                    </p>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-text">
                    <p>
                      <?php echo $upoll['title']; ?>
                    </p>
                  </div>
                  <div class="line-divider"></div>
                  <div id="pollOpts<?php echo $upoll['sr']; ?>" class="radio-toolbar">

                    <?php if(!empty($upoll['opta'])){ ?>
                    <label class="optss" id="optA<?php echo $upoll['sr']; ?>" onclick="pollOpt(<?php echo $upoll['sr']; ?>,'A')">A: <?php echo $upoll['opta'] ?></label>
                    <p id="countA<?php echo $upoll['sr']; ?>" style="display: none;"><?php getPollCount($upoll['sr'],'A'); ?></p>
                    <?php } ?>

                    <?php if(!empty($upoll['optb'])){ ?>
                    <label class="optss" id="optB<?php echo $upoll['sr']; ?>" onclick="pollOpt(<?php echo $upoll['sr']; ?>,'B')">B: <?php echo $upoll['optb'] ?></label>
                    <p id="countB<?php echo $upoll['sr']; ?>" style="display: none;"><?php getPollCount($upoll['sr'],'B'); ?></p>
                    <?php } ?>

                    <?php if(!empty($upoll['optc'])){ ?>
                    <label class="optss" id="optC<?php echo $upoll['sr']; ?>" onclick="pollOpt(<?php echo $upoll['sr']; ?>,'C')">C: <?php echo $upoll['optc'] ?></label>
                    <p id="countC<?php echo $upoll['sr']; ?>" style="display: none;"><?php getPollCount($upoll['sr'],'C'); ?></p>
                    <?php } ?>

                    <?php if(!empty($upoll['optd'])){ ?>
                    <label class="optss" id="optD<?php echo $upoll['sr']; ?>" onclick="pollOpt(<?php echo $upoll['sr']; ?>,'D')">D: <?php echo $upoll['optd'] ?></label>
                    <p id="countD<?php echo $upoll['sr']; ?>" style="display: none;"><?php getPollCount($upoll['sr'],'D'); ?></p>
                    <?php } ?>

                    <?php if(!empty($upoll['opte'])){ ?>
                    <label class="optss" id="optE<?php echo $upoll['sr']; ?>" onclick="pollOpt(<?php echo $upoll['sr']; ?>,'E')">E: <?php echo $upoll['opte'] ?></label>
                    <p id="countE<?php echo $upoll['sr']; ?>" style="display: none;"><?php getPollCount($upoll['sr'],'E'); ?></p>
                    <?php } ?>

                    <p class="pull-right" style="padding-bottom: 20px"><?php getUsrCount($upoll['sr']) ?> users voted</p><br>
                    
                    <?php reqpoll($upoll['sr']) ?>

                  </div>
                    <?php if($upoll['status']=="Available"){ ?>
                    <h4 id="pollOn<?php echo $upoll['sr']; ?>" style="color: #5c5c5c; display: block;" 
                      >Poll is now 
                      <span style="color: #00c42b;" >Available</span>
                    </h4>
                    <h4 id="pollOff<?php echo $upoll['sr']; ?>" style="color: #5c5c5c;  display: none;" 
                      >Poll is 
                      <span style="color: red;">Locked</span>
                    </h4>
                    <input id="pollEn<?php echo $upoll['sr']; ?>" onclick="pollEn(<?php echo $upoll['sr']; ?>)" type="checkbox" class="switch_1" checked>
                  <?php 
                  } 
                  else{
                  ?>
                  <h4 id="pollOn<?php echo $upoll['sr']; ?>" style="color: #5c5c5c; display: none;" 
                      >Poll is now 
                      <span style="color: #00c42b;" >available</span>
                    </h4>
                    <h4 id="pollOff<?php echo $upoll['sr']; ?>" style="color: #5c5c5c;  display: block;" 
                      >Poll is 
                      <span style="color: red;">Locked</span>
                    </h4>
                    <input id="pollEn<?php echo $upoll['sr']; ?>" onclick="pollEn(<?php echo $upoll['sr']; ?>)" type="checkbox" class="switch_1">
                  <?php } ?>

                  <div id="poll_del<?php echo $upoll['sr']; ?>" class="poll-del">
                    <div class="poll-del-content">
                      <h4>Do you want to Delete this Poll ?<?php echo $upoll['sr']; ?></h4>
                      <form method="POST"><button class="yes" name="poll_del" value="<?php echo $upoll['sr']; ?>">Yes</button></form>
                      <button onclick="poll_cancle(<?php echo $upoll['sr']; ?>)" class="no">No</button>
                    </div>
                  </div>

                  <i onclick="del_poll(<?php echo $upoll['sr']; ?>)" class="fa fa-trash" style="font-size: 30px; color: red; cursor: pointer; float: right;" aria-hidden="true"></i>
                  <!-- <p>&nbsp;</p> -->
                </div>
              </div>
            </div>
            <?php } ?>

          </div>

          <!-- Newsfeed Common Side Bar Right
          ================================================= -->
          <div class="col-md-2 static">
            <div class="suggestions" id="sticky-sidebar">
              <h4 class="grey">Who to Follow</h4>


              <?php foreach ($new_friends as $nf): ?>
                    <?php if($nf['id']!=$id){
                    $empty=0;
                    $res=0;
                    if(empty($flw))
                    {
                      $empty=1;
                    }
                    ?>
                    <?php foreach($follwr as $flw): ?>
                    <?php
                    if($flw['request']==$nf['id'])
                    {
                    $res=1;
                    break;
                    }
                    elseif($flw['approve']==$nf['id'])
                    {
                    $res=2;
                    break;
                    }
                    ?>
                    <?php endforeach ?>
                    <?php
                    if($res==1)
                    {
                    $msg="Cancle Request";
                    }
                    elseif($res==2)
                    {
                    $msg="Unfollow";
                    }
                    elseif($empty==1)
                    {
                    $msg="Add friend";
                    }
                    else
                    {
                    $msg="Add friend";
                    }
                    ?>
              <div class="follow-user">
                <img 
                <?php if($nf['profile']=="profile.png"){ ?>
                src="php/index/usr/profile.png"
                <?php }
                else{ ?>
                src="php/index/usr/<?php echo md5($nf['email']) ?>/<?php echo $nf['profile'] ?>"
                <?php } ?>

                 alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="timeline.php"><?php echo $nf['firstname']." ".$nf['lastname'] ?></a></h5>
                  <a href="#" class="text-green" id="addf<?php echo $nf['id'] ?>addfriend" type="button" onclick="addFri(<?php echo $nf['id'] ?>,'addfriend')"><?php echo $msg ?></a>
                </div>
              </div>
              <?php } ?>
              <?php endforeach ?>

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
    <!-- <script
      async
      defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTMXfmDn0VlqWIyoOxK8997L-amWbUPiQ&callback=initMap"
    ></script> -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/poll.js"></script>
    <script src="js/timeline.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
