<?php
	$servername = "localhost";
	$username = "Omis";
	$password = "123456";
	$dbname = "omis";
	$table = "fcontroller";
	$type = $_GET['Type'];
	$power = $_GET['Power'];
	$createdOn = $_GET['CreatedOn'];
	
	//INSERT INTO `fcontroller`(`Type`, `Power`, `CreatedOn`) VALUES ('Type-11',10,'2019-11-02 09:25:10')
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql = "INSERT INTO `fcontroller`(`Type`, `Power`, `CreatedOn`) VALUES ('$type',$power,'$createdOn')";
	if($conn->query($sql)) {
		header("Refresh:0; url=http://localhost/OMIS/Lesson12/addData.html");
	}
	
?>