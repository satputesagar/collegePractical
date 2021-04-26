<?php
$r;
$sum=0;
$temp;  
 $n=646;   
  echo" Number :   ";   
  echo $n;
   echo"<br>";
 $temp=$n;    
 while($n>0)    
{    
$r=$n%10;    
$sum=($sum*10)+$r;    
$n=$n/10;    
}    
if($temp==$sum)    
echo"Number is Palindrome.";    
else    
echo"Number is not Palindrome.";   
?>