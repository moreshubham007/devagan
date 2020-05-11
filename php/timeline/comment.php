<!-- <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm" />
                        <p><a href="timeline.html" class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p> -->

<?php
include("../index/database/database.php");

if(isset($_POST['pid']))
{
session_start();
$log=$_SESSION['id'];
$pid=$_POST['pid'];
$action=$_POST['action'];
$comment=$_POST['comment'];
$sr=$_POST['sr'];
if($action=="post")
{
$sql = "INSERT INTO comments (sr, uid, pid, comment) VALUES (sr, '$log', '$pid', '$comment')";
        if ($conn->query($sql) === TRUE) {
	echo "$comment";
}
}
elseif($action=="update")
{
$sql="UPDATE comments set comment='$comment' where sr=$sr";
if($conn->query($sql)===TRUE)
{
echo "$comment";
}
}
elseif($action=="delete")
{
$sql="DELETE from comments where sr=$sr";
if($conn->query($sql)===TRUE)
{
echo "<p style='color:red'>Comment was deleted</p>";
}
}

}
?>