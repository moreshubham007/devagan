<?php
// Fetch Album
$sql = "SELECT * from posts where uid = $id ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
$albumPic = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>