<?php
$num=2004;
//$num =2014 it is not a leap year
echo" year is ",$num;
echo"<br>";

if((($num%4==0) && (($num%400==0) || ($num%100!==0))))
{
	echo $num;
	echo" is a leap year";

}
else
{
	echo $num;
	echo" is not a leap year";
}


?>