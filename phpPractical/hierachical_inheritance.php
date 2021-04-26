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
class developer extends name{
	function developer()
	{
		echo " developer name : Danish-Canadian programmer Rasmus Lerdorf ";
	}
}
echo"developer class is connected of names parent class<br>";
$object=new developer();
$object->names();
echo"<br>";
echo"age class is connected of names parent class";
$object2=new age();
$object2->names();


?>