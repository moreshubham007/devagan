<?php
date_default_timezone_set("Asia/Kolkata");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "social";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    ?>
    <script type="text/javascript">
    	alert(<?php echo "Connection Failed !"; ?>);
        window.location.href="../../../index.php";
    </script>
    <?php
} 
?>