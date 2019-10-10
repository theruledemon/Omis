<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"> 
		<title>PHP_1</title>
	</head>
	<body>
		<h1>My first PHP page.</h1>
		<!-- comment -->
		<p>Comment</p>
		<?php		
		
		// comment
		# comment
		/*
			Multi comment
		*/
			echo "lowercase"; // String
			EcHO " notlower";
			echo "<h3>Heading 3</h3>";
			echo -5 + 2; // Integer
			echo "<br>";
			echo 5.5; //float
			echo "<br>";
			echo (int)5.7; // float -> int
			echo "<br>";
			// f(x)()
			echo floor(5.6); //float
			echo "<br>";
			echo ceil(5.6 + 2); // float
			echo "<br>";
				//rand(min, max)
			echo rand(10, 100) + rand(10, 100); // random 10 - 100
			// "10-100" + "10-100"
			echo "<br>";
			echo (int)"11ASDS" + (int)"10";
			echo "<br>";
			echo "111" + "10";
			echo "<br>";
			echo strlen("Hello world"); // lenght
			echo "<br>";
			echo str_word_count("Hello world"); // words
			echo "<br>";
			echo strlen("Hello world") + str_word_count("Hello world");
			echo "<br> Find word pos: ";
			echo strpos("Hello world is good day." , "good");
			echo "<br> Replace word: ";
			echo str_replace("day", "night", "Hello world is good day");
			// str_replace(find, replace, "TXT");
			echo "<br> Sub string: ";
			echo substr("Hello world is good day." , 6);
			//substr("TXT", start, finish);
			echo "<br>";
			$str = "Hello woasdasrldaasdasdsdadas is good day.";
			echo substr($str , strpos($str, "good"));
			echo "<br>";
			
			
			
			//variables
			$a = "Hello";
			$c = 2;
			$b = "<br>";
			$age = 24;
			echo $a . $b; // string . string = string
						  // int + int = int
						  // string . int = string
			echo "$a world is $age old";
			echo $b . "hello 2 + 2";
			echo $b . "hello " . ($c + $c);
			$c += 1;
			$c = $c + 1;
			
			echo $b . "hello " . ($c + $c);
			
			echo $b;
			
			
			$g = "global";
			$g = "global2";
			  
			function p() {
				global $g;
				echo "$g Hello function";
			}
			
			p();
			echo $b;
			
			function add($a, $b) {
				echo $a + $b;
			}
			
			add(3, 2);
			
			// string . string = string
			// int . stinrg = string
			// (int + int) = int
			// "$par1 $par2"
			
			//function (hello, world, 5) = hello //world = 5.
			
			function add3($par1, $par2, $par3) {
				/*echo "<br>" . $par1 . " " . $par2 . " = " . $par3;*/
				echo "<br> $par1 $par2 = $par3";
			}
			
			add3("Hello", "world", 5);
			add3("Hello", "me", 55);
			add3("Hello", "you", 65);
			add3("Hello", "me", 12);
			// echo string int string int
			// Today is 5 + 5 * 2 time. math 5 * 5
			echo "<br>";
			echo "Today is " . ( 5 + 5 * 2) . " time. Math" . (5 * 5); 
			// Today is 15 time. math 25
			
			
			
			
			
			
			
			
			
			
			function add2($a, $b) {
				return $a + $b;
			}
			
			echo $b. add2(2, 2);
			
			
			
			
			
			
			
			
		?>
	</body>
</html>