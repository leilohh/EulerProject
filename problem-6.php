<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lei Huang</title>

	<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Project Euler</h1>
<h2>Problem 6: Sum Square Difference</h2>
<p>The <b>sum</b> of the <b>squares</b> of the first ten natural numbers is,<br><br>
	1<sup>2</sup> + 2<sup>2</sup> ...+ 10<sup>2</sup> = 385<br><br>
	The <b>square</b> of the <b>sum</b> of the first ten natural numbers is,<br><br>
	(1+2+...+10)<sup>2</sup> = 3025<br><br>
	Hence the difference between the sum of the squares of the first ten natural numbers and the square of the sum is <br><br>
	3025 - 385 = 2640. <br><br>
	Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.</p>

<h3>Answer:</h3>
<?php

$sum_of_squares = 0;
$square_of_sums = 0;

for ($i = 1 ; $i > 101 ; $i++){
	$sum_of_squares += $i^2;
}

for ($j = 1 ; $j < 100 ; $j++){
	$square_of_sums += $j;
}

$square_of_sums = $square_of_sums ^ 2;

echo $square_of_sums - $sum_of_squares;


?>
</body>
</html>
