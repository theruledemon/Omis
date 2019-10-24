<?php
// add html element
echo "<h2>Basic</h2>";

//check for username
if (isset($_GET["username"])) {
	$username = $_GET["username"];
} else {
	$username = "Dummy";
}

//check for number
if (isset($_GET["number"])) {
	$choice = $_GET["number"];
} else {
	$choice = null;
}

// see if number is 10
if($choice == 10) {
	echo "Win: $username <br>";
}

// print text
echo "Hello: $username and num is $choice";

//add html element
echo "<h2>Math</h2>";

//check for function
if (isset($_GET["function"])) {
	$function = $_GET["function"];
} else {
	$function = null;
}

//check for number1
if (isset($_GET["number1"])) {
	$number1 = $_GET["number1"];
} else {
	$number1 = null;
}

//check for number2
if (isset($_GET["number2"])) {
	$number2 = $_GET["number2"];
} else {
	$number2 = null;
}

// add 2 numbers, needs 2 variables
function addTwo($num1, $num2) {
	return $num1 + $num2;
}

// subtract 2 numbers
function subTwo($num1, $num2) {
	return $num1 - $num2;
}

if ($function == "+") {
	// string + (result from funtion named addTwo)
	echo "Result: " . addTwo($number1, $number2) . "<br>";
} elseif ($function == "-") {
	// string + (result from funtion named subTwo)
	echo "Result: " . subTwo($number1, $number2)  . "<br>";
} else {
	echo "<p style='Color: red'>ERROR</p>";
}

//add html element
echo "<h2>Array</h2>";

//check for cars
if (isset($_GET["cars"])) {
	$cars = $_GET["cars"];
} else {
	$cars = [];
}

// loop for each car
for($i = 0; $i < count($cars); $i++) {
	echo "Car nr: $i is " . $cars[$i] . "<br>";
}

//add html element
echo "<h2>Files</h2>";

//check for content
if (isset($_GET["content"])) {
	$content = $_GET["content"];
} else {
	$content = null;
}

// open file w-write, r-read, a-append
$myfile = fopen("newFile.txt", "w") or die("ERORR with file");
fwrite($myfile, $content);
fclose($myfile);

//open with append
$myfileAppend = fopen("newFile.txt", "a") or die("ERORR with file");
fwrite($myfileAppend, "\n" . "copy - " . $content);
fclose($myfileAppend);

// open file to read
$fh = fopen('newFile.txt','r');

//go for each line
while ($line = fgets($fh)) {
  echo "Line: " . $line . "<br>";
}
fclose($fh);

echo "<br>" .  "Content is: $content";