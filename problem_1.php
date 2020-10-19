<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lei Huang</title>

	<link rel="stylesheet" href="style.css">
</head><h1>Project Euler</h1>

<h2>Problem 1: Multiples of 3 and 5</h2>
<p>If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23. Find the sum of all the multiples of 3 or 5 below 1000.</p>


<?php

function findSum(){

	$sum = 0;

	for ($i = 0 ; $i <= 1000 ; $i++){
		if ($i % 3 == 0 || $i % 5 == 0) {
			$sum += $i;
		}

	}

	return $sum;
}

echo "The sum is ", findSum();

?>
</body>
</html>
