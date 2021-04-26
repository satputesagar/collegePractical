<?php
$num=0;
$a=0;
$b=1;
echo"print fibonacci series: ";
echo $a,' ',$b ,' ';
while ($num < 10 ) 
{
$sum=$a+$b;
echo $sum,' ';
 $a=$b;
 $b=$sum;
 $num=$num+1;
 // echo"fibonacci series"+$sum;
}
?>