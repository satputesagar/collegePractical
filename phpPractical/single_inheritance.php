<?php

class name
{
	function names()
	{
		echo"<br>";
		echo " i am php";
	}
}
class age extends name
{
	function age()
	{
		
		echo "It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994";
	}
}

$object=new age();
$object->names();
//$object->age();


?>