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

    $query = "INSERT INTO `tbl_feedback`( `username`, `email`, `subject`, `message`) VALUES ('$Name','$Email','$Subject','$Message')";

    print($query);

    $result = mysqli_query($con,$query);

    print($result);
    

    if ($result) {
		
		echo '<script>alert("Thnakyou For FeedBack")</script>';
	  echo "<script>location.href='index.html'</script>";
	}
	else{
    echo '<script>alert("Thnakyou Not For FeedBack")</script>';
		 echo "<script>location.href='index.html'</script>";
	  	
	}
}

?>