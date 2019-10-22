<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"> 
		<title>PHP_2</title>
	</head>
	<body>
		<?php
			$txt = "Hello World. Today is 22.10.2019 and its Tuesday";
			
			$b = "<br>";
			
			echo $txt . $b;
			
			echo "Arrays" . $b;
			echo "car, bike, ....." . $b;
			
			$cars = array("Volvo", "BMW", "Toyota");
			echo implode(" -> ", $cars) . $b;
			array_push($cars, "Nissan");
			echo implode(" -> ", $cars) . $b;
			echo "We have on sale: " . count($cars) . " cars" . $b;
			echo "Sorting" . $b;
			sort($cars);
			echo implode(" -> ", $cars) . $b;
			rsort($cars);
			echo implode(" <- ", $cars) . $b;
			
			echo "Array in array" . $b;
			$carWithCash = array (
				array("Volvo", 25),
				array("Audi", 30)				
			);
			
			echo $carWithCash[0][0] . " price " . $carWithCash[0][1] . $b . $b;
			
			function printCars() {
				$cars = array("Volvo", "BMW", "Toyota");
				echo implode(" -> ", $cars) . "<br>";
			}
			
			printCars();
			echo $b;
			
			function getCar($pos) {
				$carCollection = $GLOBALS['cars'];
				return $carCollection[$pos] . "<br>";
			}
			
			echo "We got a: " . getCar(0);
			echo "we got a: " . getCar(1);
			echo "we got a: " . getCar(2);
			echo $b;
			
			function getCar2($cars, $pos) {
				return $cars[$pos] . "<br>";
			}
			
			echo "We got a: " . getCar2($cars, 1);
			echo "we got a: " . getCar2($cars, 2);
			echo "we got a: " . getCar2($cars, 0);
			echo $b;

			
			
			// get random car from array
			// rand(10,100);
			function getRandCollection($collection){
				$count = (count($collection) - 1);
				$rng = rand(0,$count);
				return $collection[$rng];
			}
			echo "Random car: " . getRandCollection($cars);
			
			
			echo $b;
			echo $b;

			
			//if else statemen
			
			function decide($choice){
				// true/false
				
				if ($choice == 1){
					return "I lost";
				}
				
				//equal
				if($choice == 2){
					return "You lost";
				}
				
				// not equal
				/*
				if($choice != 2){
					return "You win";
				}
				*/
				
				
				
				if($choice == 3) {
					return "3";
				} elseif ($choice == 4) {
					return "4";
				}
				
				//between 5 -> 10
				if ($choice >= 5 and $choice <= 10) {
					return "More than 5 and less than 10";
				}
				
				// or 11/12
				if ($choice == 11 or $choice == 12) {
					return "11 or 12";
				}
				
				// 13 -> 15 17 -> 20 16 - error
				if ( ($choice >= 13 and $choice <= 15) or ($choice >= 17 and $choice <= 20) ) {
					return "Double";
				}
				
				switch ($choice) {
					case 21:
						return "21";
						//break;
					case 22:
						return "22";
						//break;
				}
				
				
				
				
				return "ERROR";
			}
			
			echo "Decided: " . decide(23);
			
			echo $b;
			
			//For loops /  while loops $i = $i + 1;
			for ($i = 0; $i < 10; $i++) {
				echo "Loop: " . $i . $b;
			}
			
			echo $b;
			
			for ($i = 0; $i <= (count($cars) - 1); $i++) {
				echo "Cars: " . $cars[$i] . $b;
			}
			
			echo $b;
			
			echo implode("<br> ", $cars);
			
			

		?>
	</body>
</html>