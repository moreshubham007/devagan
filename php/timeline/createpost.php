<?php
include("../index/database/database.php");
$noimg=0;
if(isset($_POST["submit"])) {
    $uid=$_POST["submit"];
    $sql = "SELECT email FROM users where id=$uid";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) 
    {
        while($row = mysqli_fetch_assoc($result)) 
        {
            $loc=md5($row['email']);
        }
    }
    $texts=$_POST["texts"];
}
$target_dir = "../index/usr/$loc/";
date_default_timezone_set("Asia/Kolkata");
$upload_time=time();
$target_file = $target_dir .basename($_FILES["fileToUpload"]["name"]);
echo "$target_file";
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    if($_FILES["fileToUpload"]["name"] != '')
    {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 1;
        }
    }
    elseif($texts!="")
    {
        $noimg=1;
    }
    else
    {
          ?>
          <script type="text/javascript">
            alert('Empty Post!');
            window.location.href="../../index.php";
          </script>
          <?php
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    // echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 200000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "mp4" && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. $imageFileType";
    // $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    $fname="../index/usr/$loc/".$upload_time.".".$imageFileType;
    $date_time=$upload_time;
    $file=$upload_time.".".$imageFileType;
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $fname)) {
        //insert into database
        $sql = "INSERT INTO posts (id, uid, texts, file, date_time) VALUES (id, '$uid', '$texts', '$file','$date_time')";
        if ($conn->query($sql) === TRUE) {
            $act="Created a Post";
            $actt=$upload_time;
            $sql = "INSERT INTO activity (sr, uid, act, actt) VALUES (sr, '$uid', '$act', '$actt')";
            if ($conn->query($sql) === TRUE) {
        session_start();
        $_SESSION['pst']=10;
        echo "<script>alert('succ');</script>";
          ?>
          <script type="text/javascript">
            window.location.href="../../index.php";
          </script>
          <?php
            }
        } 
        else {
            echo "<script>alert('Something went wrong 1');</script>";
          ?>
          <script type="text/javascript">
            window.location.href="../../index.php";
          </script>
          <?php
        }
        $conn->close();
        // insert into database
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded... $uid $loc";
        echo "<br>$texts";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
if($noimg==1)
{
        $file="";
        $sql = "INSERT INTO posts (id, uid, email, texts, file, date_time) VALUES (id, '$uid', '$email', '$texts', '$file','$upload_time')";
        if ($conn->query($sql) === TRUE) {
            $act="Created a Post";
            $actt=$upload_time;
            $sql = "INSERT INTO activity (sr, uid, act, actt) VALUES (sr, '$uid', '$act', '$actt')";
            if ($conn->query($sql) === TRUE) {

        session_start();
        $_SESSION['pst']=10;
        echo "<script>alert('succ');</script>";
          ?>
          <script type="text/javascript">
            window.location.href="../../index.php";
          </script>
          <?php
        }
        } 
        else {
            echo "<script>alert('Something went wrong 2');</script>";
          ?>
          <script type="text/javascript">
            window.location.href="../../index.php";
          </script>
          <?php
        }
}
?>
