<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lei Huang</title>

	<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Project Euler</h1>
<h2>Problem 7: 10001st Prime</h2>
<p>By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13. <br><br>
	What is the 10 001st prime number?</p>

<h3>Answer:</h3>

<?php

/*
 * NOTE: this code works with reasonable computing time with numbers around the thousands
 */

$prime_count = 1; // prime count starts at 1 to include the number 2 in the prime count, as the while loop starts testing at 3
$num = 3;

while ($prime_count < 2000){

	$non_factors = 0;

	for ($i = 2 ; $i < $num ; $i++){

		if ($num % $i == 0){
			break;
		} else {
			$non_factors += 1;
		}
	}

	if ($non_factors == $num - 2){ //the number is tested with all numbers between 1 and itself as a factor, so it should have racked up a count of (itself - 2) factors
		$prime_count += 1;
	}

	$num += 2; //incrementing by 2 because we can skip all even numbers, since they will all have factor of 2

}

echo "The " . $prime_count . "th prime number is " . $num;

?>
</body>
</html>
