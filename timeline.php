<?php include("php/timeline/timeline.php"); ?>
<?php include('php/timeline/rating.php'); ?>
<?php include('php/timeline/addfriend.php'); ?>
<?php include('php/timeline/comment.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
      .timeline-cover 
      {
          background: url('php/index/usr/<?php echo $cover; ?>') no-repeat;
      }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
    <title>My Timeline | This is My Coolest Profile</title>

    <!-- Stylesheets
    ================================================= -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css\style.css" />
    <link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="css/emoji.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style2.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/emoji.css" rel="stylesheet" />

    <!--Google Font-->
    <link
      href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i"
      rel="stylesheet"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/script.js"></script>

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
            <a class="navbar-brand" href="index.php"><span>LOGO</span></a>
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
              <li class="dropdown"><a href="poll.php">Poll</a></li>
              <li class="dropdown"><a href="contact.html">Contact</a></li>
              <li class="dropdown"><a href="">Update Profile</a></li>
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
                  <p class="text-muted"><?php echo "$about"; ?></p>
                </div>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                  <li><a href="timeline.php" class="active">Timeline</a></li>
                  <li><a href="timeline-about.html">About</a></li>
                  <li><a href="timeline-album.php">Album</a></li>
                  <li><a href="timeline-friends.php">Friends</a></li>
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
                  <img
                    src="php/index/usr/profile.png"
                    alt=""
                    class="img-responsive profile-photo"
                  />
              <h4><?php echo "$firstname $lastname" ?></h4>
              <p class="text-muted"><?php echo " $about" ?></p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                <li><a href="timline.html" class="active">Timeline</a></li>
                <li><a href="timeline-about.html">About</a></li>
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
            <div class="col-md-3"></div>
            <div class="col-md-7">
              <!-- Post Create Box
              ================================================= -->
              <div class="create-post">
<form action="php/timeline/createpost.php" method="post" enctype="multipart/form-data">
<div class="row">
<div class="col-md-7 col-sm-7">
<div class="form-group">
<img src="php/index/usr/<?php echo $profile; ?>" alt="" class="profile-photo-md" />
<textarea
name="texts"
id="exampleTextarea"
cols="60"
rows="2"
class="form-control"
placeholder="Write what you wish"
></textarea>
</div>
</div>
<div class="col-md-5 col-sm-5">
<div class="tools">
<ul class="publishing-tools list-inline">
    <li>
        <img width="30" height="30" id="imgFileUpload" alt="Select File" title="Select a File" src="php/timeline/uploadfile.jpg" style="cursor: pointer" />
    </li>
</ul>
<!-- select file -->    
<span id="spnFilePath"></span>
    <input type="file" name="fileToUpload" accept="video/*,image/*" id="FileUpload1" style="display: none" />
        <script type="text/javascript">
                      window.onload = function () {
                          var fileupload = document.getElementById("FileUpload1");
                          var filePath = document.getElementById("spnFilePath");
                          var image = document.getElementById("imgFileUpload");
                          image.onclick = function () {
                              fileupload.click();
                          };
                          fileupload.onchange = function () {
                              var fileName = fileupload.value.split('\\')[fileupload.value.split('\\').length - 1];
                              filePath.innerHTML = "<b>Selected File: </b>" + fileName;
                          };
                      };
        </script>
<!-- select file -->
<button name="submit" class="btn btn-primary pull-right" value="<?php echo $id ?>">Publish</button>
</div>
</div>
</div>
</form>

              </div>
              <!-- Post Create Box End-->

              <!-- Post Content
              ================================================= -->
                <?php foreach ($posts as $post):
                $ok=0;
                 ?>
                <?php foreach($timefollow as $tmf){
                  if($post['uid']==$tmf['approve'] || $post['uid']==$id){
                    $ok=1;
                    break;
                  }
                  }
                  if($ok==1)
                  {
                 ?>
                  <div class="post-content">
                <!--Post Date-->
                  <div class="post-date hidden-xs hidden-sm">
                    <h5><?php requsrinfo("firstname",$post['uid']); ?></h5>
                    <p class="text-grey">
                      <?php echo "Posted on <br> " . date("d-m-Y", $post['date_time']); echo "<br>at ".date("h:i:sa",$post['date_time']); ?>
                      </p>
                  </div>
                  <!--Post Date End-->
                                  <!--Post Date End-->
                  <?php
                  if($post['file']!="")
                  {
                  $f = explode('.mp4', $$post['file']);
                  ?>
                  <img
                    src="php/index/usr/<?php requsrinfo("email",$post['uid']); ?>/<?php echo $post['file'] ?>"
                    alt=""
                    class="img-responsive post-image"
                  />
                  <?php
                  }
                  ?>
                  <div class="post-container">
                  <img
                    src="<?php requsrinfo("profile",$post['uid']); ?>"
                    alt="user"
                    class="profile-photo-md pull-left"
                  />
                    <div class="post-detail">
                      <div class="user-info">
                        <h5><a href="timeline.html" class="profile-link"><?php requsrinfo("firstname, lastname",$post['uid']); ?></a> 
                          <span class="following">
                          <?php
                          if($post['uid']==$id)
                          {
                            echo "Hey, It's You";
                          }
                          else
                          {
                            echo "following";
                          }
                          ?>
                          </span></h5>
                        <p class="text-muted">Published on <?php echo "Posted on " . date("d-m-Y", $post['date_time']); echo " at ".date("h:i:sa",$post['date_time']); ?>
                        </p>
                      </div>
                      <div class="reaction">

                       <!--  <a class="btn text-green"><i class="icon ion-thumbsup"></i> 49</a>
                        <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a> -->

                        <i <?php if (userLiked($post['id'])): ?>
                            class="fa fa-thumbs-up like-btn"
                          <?php else: ?>
                            class="fa fa-thumbs-o-up like-btn"
                          <?php endif ?>
                          data-id="<?php echo $post['id'] ?>"></i>
                        <span class="likes"><?php echo getLikes($post['id']); ?></span>
                        
                        &nbsp;&nbsp;&nbsp;&nbsp;

                      <!-- if user dislikes post, style button differently -->
                        <i 
                          <?php if (userDisliked($post['id'])): ?>
                            class="fa fa-thumbs-down dislike-btn"
                          <?php else: ?>
                            class="fa fa-thumbs-o-down dislike-btn"
                          <?php endif ?>
                          data-id="<?php echo $post['id'] ?>"></i>
                        <span class="dislikes"><?php echo getDislikes($post['id']); ?></span>
                      </div>
                      <div class="line-divider"></div>
                      <div class="post-text">
                        <p>
                          <?php echo $post['texts']; ?>
                        </p>
                      </div>
                      <div class="line-divider"></div>
<!-- Comment -->
                      <?php
                      $pid=$post['id'];
                      $sql="SELECT * from comments where pid=$pid";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                              $uid=$row["uid"];
                              $comment=$row["comment"];
                              if($uid!=$id){
                              ?>
                              <div class="post-comment">
                                <img src="<?php requsrinfo('profile',$uid); ?>" alt="" class="profile-photo-sm" />
                                <p> <a href="timeline.html" class="profile-link"> <?php requsrinfo('firstname',$uid); ?> </a>: <?php echo "$comment"; ?></p>
                              </div>
                              <?php
                              }
                              else
                              {
                                $commor=$row["comment"];
                                $sr=$row['sr'];
                              }
                          }
                        }
                      ?>

                      <div id="userComm<?php echo $post['id'] ?>" 
                        <?php 
                        if(empty($commor)){
                        ?>
                        style="display: none;"
                        <?php } ?>
                        class="post-comment">
                        <img src="php/index/usr/<?php echo $profile; ?>" alt="" class="profile-photo-sm" />
                        <p><a href="timeline.html" class="profile-link"> <?php echo "$firstname"; ?>: </a>
                        <p id="shComm<?php echo $post['id'] ?>"><?php echo $commor; ?></p>
                        </p>
                      </div>

                      <div class="post-comment">
                        <img src="php/index/usr/<?php echo $profile; ?>" alt="" class="profile-photo-sm" />
                        <input id="inputComment<?php echo $post['id'] ?>" type="text" class="form-control" placeholder="Post a comment">

                        <button id="postComm<?php echo $post['id'] ?>" class='btn-style'
                          <?php if(!empty($commor)){?> style="display: none;" <?php } ?>
                          onclick="comment(<?php echo $post['id']; ?>,'post')">Post</button>

                        <button value="<?php echo $sr; ?>" id="updateComm<?php echo $post['id'] ?>" class='btn-style' onclick="comment(<?php echo $post['id']; ?>,'update')"
                          <?php if(empty($commor)){?> style="display: none;" <?php } ?>
                          >Update</button>

                        <button id="delComm<?php echo $post['id'] ?>" onclick="comment(<?php echo $post['id']; ?>,'delete')" class='btn-style'
                          <?php if(empty($commor)){?> style="display: none;" <?php } ?>
                          >Delete</button>
                      </div>
<!-- /comment -->
                    </div>
                  </div>
                  </div>
                  <?php $commor="";
                  $sr="";
                  }
                  ?>
                  <?php endforeach ?>
<!-- ================= -->
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
    <script src="js/scripts.js"></script>
    <script src="js/timeline.js"></script>
  </body>
</html>
