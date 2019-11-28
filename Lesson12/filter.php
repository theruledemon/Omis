<html>
	<head>
		<title>Bootstrap Example</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="customStyle.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container-fluid container-md">
			<div class="row">
				<div class="col customHeader">
					Header
				</div>
			</div>
			<div class="row customSideMenu">
				<div class="col-3">
					<div class="btn-group-vertical" role="group" aria-label="Button group with nested dropdown">
						 <a href="/OMIS/Lesson12/" class="btn btn-primary active">Home</a>
						 <a href="/OMIS/Lesson12/aboutus.html" class="btn btn-primary">About us</a>
						 <a href="/OMIS/Lesson12/addData.html" class="btn btn-primary">Add Data</a>
						 <div class="btn-group dropright" role="group">
							 <button id="btnPictures" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Pictures
							 </button>
							 <div class="dropdown-menu" aria-labelledby="btnPictures">
								<a href="#" class="dropdown-item">Picture 1</a>
								<a href="/OMIS/Lesson12/images/Cybertruck-4.jpg" class="dropdown-item">Picture 2</a>
							 </div>
						 </div>
						 
						 <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#PicturesV2" aria-expanded="false" aria-controls="PicturesV2">	
							PicturesV2 <span class="badge badge-primary">&#8681</span>
						 </button>
						 <div class="collapse btn-group-vertical" id="PicturesV2">
							<a href="#" class="btn btn-secondary">PictureV2 1</a>
							<a href="#" class="btn btn-secondary">PictureV2 2</a>
						 </div>
						 <a href="#" class="btn btn-primary">Contact</a>
					</div>
				</div>
				<div class="col-7">
					<?php
						//INSERT INTO `fcontroller`(`Type`, `Power`, `CreatedOn`) VALUES ('Type-2',55,'2019-11-02 09:01:10');
						// SELECT * FROM `fcontroller` WHERE CreatedOn >= '2019-11-01 09:00:10' AND CreatedOn <= '2019-11-03 10:01:10'
						$servername = "localhost";
						$username = "Omis";
						$password = "123456";
						$dbname = "omis";
						$table = "fcontroller";
						$startDate = $_GET['startDate'];
						$endDate = $_GET['endDate'];
						
						$conn = new mysqli($servername, $username, $password, $dbname);
						$sql = "SELECT * FROM `fcontroller` WHERE CreatedOn >= '$startDate' AND CreatedOn <= '$endDate'";
						$sqlData = $conn->query($sql);
						while($row = mysqli_fetch_assoc($sqlData)) {
							echo $row["ID"] . " | " . $row["Type"] . " | " . $row["Power"]. " | " . $row["CreatedOn"]. "<br>";
						}
						header("Refresh:10; http://localhost/OMIS/Lesson12/filter.php?startDate=2019-11-03T09%3A00&endDate=2019-11-15T10%3A00");
					?>
				</div>
				<div class="col">
					RightSide
				</div>
			</div>
			<div class="row customFooter">
				<div class="col">
					Footer
				</div>
			</div>
		</div>
	</body>
</html>








