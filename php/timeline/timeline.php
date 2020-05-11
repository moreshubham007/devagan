<?php
include("php/index/database/database.php");
session_start();
if(isset($_SESSION['id']))
{
$id=$_SESSION['id'];
$qry="SELECT * from users where id = $id";
$result = mysqli_query($conn, $qry);
if (mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_assoc($result))
    {
        $firstname=ucfirst($row['firstname']);
        $lastname=ucfirst($row['lastname']);
        $email=$row['email'];
        $password=$row['password'];
        $day=$row['day'];
        $month=$row['month'];
        $yr=$row['year'];
        $gender=$row['gender'];
        $state=$row['state'];
        $country=$row['country'];
        $district=$row['district'];
        $profile=$row['profile'];
        $cover=$row['cover'];
        $about=$row['about'];
        if($profile!="profile.png")
        {
          $profile=md5($email)."/".$profile;
        }
        if($cover!="cover.png")
        {
          $cover=md5($email)."/".$cover;
        }
    }
}
else
{
          ?>
          <script type="text/javascript">
            window.location.href="index.php";
          </script>
          <?php
}
}
else
{
	header("location:index.php");
}

// Fetch activity
$sql = "SELECT * from activity where uid = $id ORDER BY sr DESC";
$result = mysqli_query($conn, $sql);
$activity = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Fetch friend list
$sql = "SELECT * from users";
$result = mysqli_query($conn, $sql);
$new_friends = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Fetch Friend Request List
$sql = "SELECT uid, sr from followers where request=$id";
$result = mysqli_query($conn, $sql);
$frireq = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Accepted Friend List
$sql = "SELECT uid, sr from followers where approve=$id";
$result = mysqli_query($conn, $sql);
$friappr = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Select all followers
$sql = "SELECT * from followers where uid=$id";
$result = mysqli_query($conn, $sql);
$timefollow = mysqli_fetch_all($result, MYSQLI_ASSOC);

// function for accessing other friend info
function requsrinfo($reqinfo,$reqid)
{
include("php/index/database/database.php");
$sql = "SELECT * from users where id=$reqid";
// echo "<script>alert('$reqinfo $reqid');</script>";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    if($row = $result->fetch_assoc()) {
      if($reqinfo=="firstname, lastname")
      {
        echo $row["firstname"]." ".$row["lastname"];
      }
      elseif($reqinfo=="firstname")
      {
        echo $row["firstname"];
      }
      elseif($reqinfo=="pass")
      {
        echo $row["password"];
      }
      elseif($reqinfo=="district")
      {
        echo $row["district"];
      }
      elseif($reqinfo=="cover")
      {
        if($row["cover"]=="cover.png")
        {
          echo "php/index/usr/cover.png";
        }
        else
        {
          echo "php/index/usr/".md5($row["email"])."/".$row["cover"];
        }
      }
      elseif($reqinfo=="profile")
      {
        if($row["profile"]=="profile.png")
        {
          echo "php/index/usr/profile.png";
        }
        else
        {
          echo "php/index/usr/".md5($row["email"])."/".$row["profile"];
        }
      }
      elseif($reqinfo=="email")
      {
        echo md5($row["email"]);
      }
    }
}
}

$qry="SELECT * from followers where uid = $id";
$result = mysqli_query($conn, $qry);
$follower=0;
if (mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $follower++;
    }
}
?>