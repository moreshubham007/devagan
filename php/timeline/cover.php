<?php
// include("../database/database.php");
//upload.php
if($_FILES["file_p"]["name"] != '')
{
 $test = explode('.', $_FILES["file_p"]["name"]);
 $ext = end($test);
 $name = rand(100, 999) . '.' . $ext;
 $location = './upload/' . $name;
 move_uploaded_file($_FILES["file_p"]["tmp_name"], $location);
 // insert

 // $sql = "INSERT INTO exp1 (sr, name, datas) VALUES (sr, '$name', '$location')";
 //        if ($conn->query($sql) === TRUE) {
 //        session_start();
 //        $_SESSION['pst']=10;
 //        echo "<script>alert('succ');</script>";
 //        } 
 //        else {
 //            echo "<script>alert('Something went wrong');</script>";
 //        $conn->close();
    // }
 // insert
 echo ' cover <img src="'.$location.'" height="150" width="225" class="img-thumbnail" />';
}


?>