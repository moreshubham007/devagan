<?php
if(isset($_SESSION['id']))
{
$id=$_SESSION['id'];
$qry="SELECT * from education where uid = $id";
$result = mysqli_query($conn, $qry);
if (mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_assoc($result))
    {
    	$univer=$row['univer'];
    	$from=$row['froms'];
    	$to=$row['tos'];
    	$desc=$row['descr'];
    	$grad=$row['grad'];
    	$new=0;
    }
}
else
{
		$new=1;
    	$univer="";
    	$from="";
    	$to="";
    	$desc="";
    	$grad="";
}

$id=$_SESSION['id'];
$qry="SELECT * from workexp where uid = $id";
$result = mysqli_query($conn, $qry);
if (mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_assoc($result))
    {
    	$company=$row['company'];
    	$design=$row['design'];
    	$dfrom=$row['dfrom'];
    	$dto=$row['dto'];
    	$city=$row['city'];
    	$descr=$row['descr'];
    	$wnew=0;
    }
}
else
{
		$wnew=1;
    	$company="";
    	$design="";
    	$dfrom="";
    	$dto="";
    	$city="";
    	$descr="";
}
}
// Update Basic Information
if(isset($_POST['bupdate']))
{
$firstname=Strtoupper($_POST['firstname']);
$lastname=Strtoupper($_POST['lastname']);
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$gender=$_POST['gender'];
$state=$_POST['countrya'];
$country=$_POST['state'];
$district=$_POST['district'];
$about=$_POST['about'];
    $sql="UPDATE users set firstname='$firstname', lastname='$lastname', email='$email', day=$day, month='$month', year=$year, gender='$gender', state='$state', country='$country', district='$district', about='$about' where id=$id";
    if($conn->query($sql)===TRUE)
    {
    	$act="Profile Updated";
    	$upload_time=time();
        $actt=$upload_time;
        $sql = "INSERT INTO activity (sr, uid, act, actt) VALUES (sr, '$uid', '$act', '$actt')";
        if ($conn->query($sql) === TRUE) {
      		echo "<script>alert('Profile Updated');</script>";
  		}
    }
}

// Update Password
if(isset($_POST['upass']))
{
	$cpass=$_POST['upass'];
	$opass=md5($_POST['opass']);
	$npass=md5($_POST['npass']);
	$rpass=md5($_POST['rpass']);
	if($cpass==$opass)
	{
		if($npass==$rpass)
		{
		    $sql="UPDATE users set password='$npass' where id=$id";
		    if($conn->query($sql)===TRUE)
		    {
				$upassmsg="<div class='login-msg-true'>Password Updated</div>";
			}
		}
		else
		{
		$upassmsg="<div class='login-msg-false'>New password not matched !</div>";
		}
	}
	else
	{
		$upassmsg="<div class='login-msg-false'>Invalid Old Password</div>";
	}

}

// Update education
if(isset($_POST['ueducation']))
{
    $univer=$_POST['univer'];
    $from=$_POST['from'];
    $to=$_POST['to'];
    $desc=$_POST['desc'];
    $grad=$_POST['grad'];
	if($new==1)
	{
		$sql = "INSERT INTO education (uid, univer, froms, tos, descr, grad) VALUES ($id, '$univer', '$from', '$to', '$desc', '$grad')";
        if ($conn->query($sql) === TRUE) {
			$upassmsg="<div class='login-msg-true'>Education Details Updated</div>";
  		}
  		else
  		{
			$upassmsg="<div class='login-msg-true'>Something Wrong</div>";
  		}
	}
	elseif($new==0)
	{
		$sql="UPDATE education set univer='$univer', froms='$from', tos='$to', descr='$desc', grad='$grad' where uid=$id";
		if($conn->query($sql)===TRUE)
		{
			$upassmsg="<div class='login-msg-true'>Education Details Updated</div>";
		}
		else
		{
			$upassmsg="<div class='login-msg-false'>Something Wrong</div>";
		}
	}
}


// Update Work exprience
if(isset($_POST['uwork']))
{
    $company=$_POST['company'];
    $design=$_POST['design'];
    $dfrom=$_POST['dfrom'];
    $dto=$_POST['dto'];
    $city=$_POST['city'];
    $descr=$_POST['descr'];
	if($wnew==1)
	{
		$sql = "INSERT INTO workexp (uid, company, design, dfrom, dto, city, descr) VALUES ($id, '$company', '$design', '$dfrom', '$dto', '$city','$descr')";
        if ($conn->query($sql) === TRUE) {
			$upassmsg="<div class='login-msg-true'>Work Details Updated</div>";
  		}
  		else
  		{
			$upassmsg="<div class='login-msg-true'>Something Wrong</div>";
  		}
	}
	elseif($wnew==0)
	{
		$sql="UPDATE education set univer='$univer', froms='$from', tos='$to', descr='$desc', grad='$grad' where uid=$id";
		if($conn->query($sql)===TRUE)
		{
			$upassmsg="<div class='login-msg-true'>Work Details Updated</div>";
		}
		else
		{
			$upassmsg="<div class='login-msg-false'>Something Wrong</div>";
		}
	}
}

?>