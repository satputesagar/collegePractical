<?php
$flag=0;
echo"enter number element ";

$n=12;
for($i=2;$i<=$n/2;$i++){
	//not prime number condition
 if( $n % $i == 0){
 	$flag =1;
 	break;
 }
}
if($n==1){
	echo"1 is neither prime nor composite";

}
else{
	if($flag==0)
		print $n." is a prime number";
	else
		print $n." is a not prime number";
}

?>