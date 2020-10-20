<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lei Huang</title>

	<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Project Euler</h1>
<h2>Problem 4: Largest Palindrome Product</h2>
<p>A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.<br><br>

	Find the largest palindrome made from the product of two 3-digit numbers.</p>

<?php

/*
 * Start with the largest 3 digit numbers and work backwards?
 * Start with the largest possible product of 2 three digit numbers and work backwards?
 */

$product = 999*999;

$from_start = substr($product, 0,1);
$from_end = substr($product, -1);

echo $product . ", " . $from_start . ", " . $from_end;

if ($first_digit == $last_digit) {

}

?>
</body>
</html>
