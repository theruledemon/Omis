<html>
	<head>
		<meta charset="UTF-8"> 
		<title>PHP_sql</title>
	</head>
	<body>
		<?php
		echo "<h1>Here will be sql</h1>";
		$id = $_POST["Id"];
		$name = $_POST["Name"];
		$date = $_POST["Date"];
		$servername = "localhost";
		$username = "Omis";
		$password = "123456";
		$dbname = "omis";
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		if($conn->connect_error) {
			echo "Can't connect";
		}
		//echo date_format(date_create($date), "Y-m-d H:i:s");
		
		/*
		if($id == "") {
			$id = 25;
		}
		if($name == "") {
			$name = "Anonymous";
		}
		if($date == "") {
			$date = date("Y-m-d");
		}
		*/
		// UPDATE controller SET Name = "asd", Created = "2018-10-31" WHERE ID = 1
		
		if($id == "") {
			
		} else {
			
		}
		
		
		if($id == "") {
			$sql = "INSERT INTO controller(Name, Created) VALUES ('$name' , '$date' )";
			$conn->query($sql);
		} else {
			$sql = "UPDATE controller SET Name = '$name', Created = '$date' WHERE ID = $id";
			$conn->query($sql);
		}
		

		
		$conn->close();
		?>
	</body>
</html>