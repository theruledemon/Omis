<html>
	<head>
		<meta charset="UTF-8"> 
		<title>SQl_PHP</title>
	</head>
	<body>
		<form action="data2.php" method="get">
			<input type="file" name="importCSV"><br>
			<input type="radio" name="loop" value="true"> true <br>
			<input type="radio" name="loop" value="false"> false <br>
			<input type="submit">
		</form>
		
		<?php
		
		$servername = "localhost";
		$username = "Omis";
		$password = "123456";
		$dbname = "omis";
		$loop = $_GET["loop"];
		
		$file = $_GET["importCSV"];
		$file = "imports/" . $file;
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		if($conn->connect_error) {
			echo "Can't connect";
		}
		
		function importData($file, $conn, $table){
			$fh = fopen($file, 'r');
			while($line = fgets($fh)){
				$impArr = preg_split("/\;/", $line);
				$sql = "INSERT INTO $table VALUES ($impArr[0] ,'$impArr[1]' , '$impArr[2]' )";
				$conn->query($sql);
			}
		}
		$table = "controller";
		while($loop == "true") {
			importData($file, $conn, $table);
			sleep(10);
		}
		
		
		

		
		$conn->close();
		
		?>
	</body>
</html>