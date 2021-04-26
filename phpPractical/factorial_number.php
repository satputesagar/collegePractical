<?php 
/* write a php program to print factorial of a number
input : 5
output: 120
*/

$N=5;
$fact =1;
for($i=1;$i<=$N;$i++)
$fact=$fact*$i;

print"factorial of ".$N." is ".$fact;

?>