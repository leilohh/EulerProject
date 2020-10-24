<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lei Huang</title>

	<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Project Euler</h1>
<h2>Problem 5: Smallest Multiple</h2>
<p>2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder. <br><br>

	What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?</p>

<h3>Answer:</h3>
<?php

/*
 * This code is functional, but takes several seconds to run through the calculations
 */

$num = 2520; // since this number is already known to be divisible by 1-10 and is also divisible by 20
$not_divisible = true;

while ($not_divisible) {
	$no_remainder = true;

	for ( $i = 1; $i < 21; $i++ ) {
		if ($num % $i != 0) {
			$no_remainder = false;
			break;
		}
	}

	if ($no_remainder == true) {
		$not_divisible = false;
	}

	$num += 20; //since this is the largest number by which num should be divisible

}

echo "The smallest positive number that is evenly divisible by all of the numbers from 1 to 20 is " . $num;

?>
</body>
</html>
