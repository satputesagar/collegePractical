<?php
$num1=20;
$num2=7;
echo 'number1 value is ',$num1;
echo"<br>";
echo 'number 2 value is ',$num2;
echo"<br>";
//function using parameterized
function addition($num1,$num2)
{
	echo "Addition function using parameterized function   :  ";
	return($num1+$num2);
}
function substraction($num1,$num2)
{
	echo "Substraction function using parameterized function   :  ";
	return($num1-$num2);
}
function multiply($num1,$num2)
{
	echo "multiplication function using parameterized function   :  ";
	return($num1*$num2);
}
function division($num1,$num2)
{
	echo "division function using parameterized function   :  ";
	return($num1/$num2);
}

//calling function;
echo addition($num1,$num2);
echo"<br>";
echo substraction($num1,$num2);
echo"<br>";
echo multiply($num1,$num2);
echo"<br>";
echo division($num1,$num2);


?>