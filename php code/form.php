<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_bilal";

$con = mysqli_connect($servername,$username,$password,$dbname);

if(isset($_POST['done'])){
    $Name = $_POST['username'];
    $Email = $_POST['email'];
    $Subject = $_POST['subject'];
    $Message = $_POST['message'];

    $query = "INSERT INTO `tbl_feedback`(`username`,`email`,`subject`,`message`,) VALUES ('$Name','$email','$Subject','$Message')";

    result = mysqli_query($con,$query);

    if ($result) {
		
		echo '<script>alert("Thnakyou For FeedBack")</script>';
	  	echo "<script>location.href='index.php'</script>";
	}
	else{
		echo "<script>location.href='index.php'</script>";
	  	
	}
}

?>