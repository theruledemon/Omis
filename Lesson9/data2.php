<html>
	<head>
		<meta charset="UTF-8"> 
		<title>PHP_sql2</title>
	</head>
	<body>
		<?php
		echo "<h1>Here will be sql</h1>";
		$servername = "localhost";
		$username = "Omis";
		$password = "123456";
		$dbname = "omis";
		$table = "controller";
		$file = $_POST["importCSV"];
		$file = "imports/" . $file;

		
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		if($conn->connect_error) {
			echo "Can't connect";
		}
		
		function importData($file, $conn, $table){
			$fh = fopen($file, 'r');
			$sqlSelect = "SELECT Id, Name, Created from $table";
			while($line = fgets($fh)){
				$impArr = preg_split("/\;/", $line);
				$sqlData = $conn->query($sqlSelect);
				if($sqlData->num_rows > 0) {
					while ($row = mysqli_fetch_assoc($sqlData)) {
						if( $row["Id"] == $impArr[0]) {
							$sqlUpdate = "UPDATE $table SET Name='$impArr[1]',Created='$impArr[2]' WHERE ID = $impArr[0]";
							$conn->query($sqlUpdate);
							break;
						}
					}
				}
				$sql = "INSERT INTO $table VALUES ($impArr[0] ,'$impArr[1]' , '$impArr[2]' )";
				$conn->query($sql);
			}		
		}
		
		importData($file, $conn, $table);
		$table = "<table><tr><th>Id</th><th>Name</th><th>Created</th></tr>";
		$sqlSelect = "SELECT Id, Name, Created from controller";
		$sqlData = $conn->query($sqlSelect);
		while ($row = mysqli_fetch_assoc($sqlData)) {
			$table = $table . "<tr>";
				$table = $table . ("<td>" . $row["Id"] . "</td>");
				$table = $table . ("<td>" . $row["Name"] . "</td>");
				$table = $table . ("<td>" . $row["Created"] . "</td>");
			$table = $table . "</tr>";
		}
		$table = $table . "</table>";
		echo $table;
		$conn->close();
		?>
	</body>
</html>