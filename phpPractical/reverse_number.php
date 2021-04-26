<?php

$number=234;
$revnum=0;
while($number >1)
{
	$rem = $number % 10;
	$revnum = ($revnum * 10) + $rem;
	$number =($number / 10);
}
echo" reverse number of 234 uis : $revnum";
?>