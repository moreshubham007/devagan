<?php
error_reporting(0);
if(include("php/index/database/database.php"))
{}
elseif(include("../index/database/database.php"))
// elseif(include("../index/database/database.php"))

session_start();
$log=$_SESSION['id'];
// select user
$sql = "SELECT * from users";
$result = mysqli_query($conn, $sql);
$new_friends = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Select followers
$sql = "SELECT * from followers where uid=$log";
$result = mysqli_query($conn, $sql);
$follwr = mysqli_fetch_all($result, MYSQLI_ASSOC);

if(isset($_POST['fid']))
{
$arr=$_POST['fid'];
$myArray = explode('*', $arr);
$request=$myArray['0'];
$task=$myArray['1'];

// Find New Friends
if($task=="addfriend")
{
$ok=1;
foreach ($follwr as $flw){
if($flw['request']==$request || $flw['approve']==$request)
{
$ok=0;
$del=$flw['sr'];
}
}
if($ok==1)
{
    $sql = "INSERT INTO followers (sr, uid, request, approve) VALUES (sr, '$log', '$request', '0')";
    if ($conn->query($sql) === TRUE) {
      echo "Cancle Request";
    }
}
else
{
  $sql="DELETE from followers where sr=$del";
  if($conn->query($sql)===TRUE)
  {
    echo "Add Friend";
  }
}
}

// Confirm Friend
if($task=="confirm")
{
    $sql = "UPDATE followers SET approve=request, request='0' WHERE sr=$request";
    if ($conn->query($sql) === TRUE) {
      $sql="SELECT * from followers where sr=$request";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              $approve=$row["approve"];
              $uid=$row["uid"];
          }
        }
      $sql = "INSERT INTO followers (sr, uid, request, approve) VALUES (sr, '$approve', '0', '$uid')";
      if ($conn->query($sql) === TRUE) {
        echo "Friend Added";
      }
    }

}

// Remove Friend
if($task=="delete")
{
    $sql = "DELETE from followers WHERE sr=$request";
    if ($conn->query($sql) === TRUE) {
      echo "Deleted";
    }

}
}

?>