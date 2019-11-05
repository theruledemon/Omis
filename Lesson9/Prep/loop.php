
<html>
	<head>
		<meta charset="UTF-8"> 
		<title>Loop</title>
	</head>
	
	<?php
		$servername = "localhost";
		$username = "Omis";
		$password = "123456";
		$dbname = "test";
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		if($conn->connect_error) {
			echo "Can't connect";
		}
		
		
		$file= $_POST["myFile"];
			// open file to read
		$fh = fopen("import/".$file,'r');
		//go for each line
		while ($line = fgets($fh)) {
			$str_arr = preg_split ("/\;/", $line);
			$sql = "INSERT INTO `controller` VALUES ($str_arr[0], '$str_arr[1]', '$str_arr[2]')";
			$conn->query($sql);
			echo "Added: " . $sql . "<br>";
		}
		fclose($fh);
	?>
	</body>
</html>