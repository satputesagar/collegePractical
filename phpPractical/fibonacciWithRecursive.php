
<?php
$num=12;
echo 'number ',$num;
echo "<br><br>";
//print "\n \n";
function recursive($num)
{
	// base case
	if($num==0)
		return 0;
	else if($num==1)
		return 1;
	else{
		//recursive function
		return(recursive($num-1)+recursive($num-2));
	}
}
// recursive function call 
	$i=0;
	echo"fibonacci using recursive function ";
	while($i<$num)
	{
		echo recursive($i),' ';
		$i++;
	}



?>