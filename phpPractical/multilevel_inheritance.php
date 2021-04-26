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
		echo"<br>";
		echo "It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994.";
	}
}
class developer extends age{
	function developer()
	{
		echo " developer name : Danish-Canadian programmer Rasmus Lerdorf ";
	}
}
$object=new developer();
$object->names();
$object->age();


?>