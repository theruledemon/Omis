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
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		
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