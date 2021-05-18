<?php
	
	class CopyConstructor {
		public $name;
		public $food_type;

		public function __construct() { } //default constructor
		public function copyCon(CopyConstructor $o) // working as copy constructor
		{
			$this->name = $o->name;
			$this->food_type = $o->food_type;
		}
		function show() {
			echo "Name = ".$this->name.'<br/>';
			echo "Food Type = ".$this->food_type;
		}
	}

	$obj1 = new CopyConstructor();
	$obj1->name = 'umar';
	$obj1->food_type = 'biryani';
	$obj1->show();

	// $obj2 = $obj1; //both hold the same reference, so if we change in obj2 then it reflect also obj1. so this method is not good.
	// $obj2->name='h';
	// $obj1->show();
	echo '<br/> ==================  object 2 ================'.'<br/>';
	$obj2 = new CopyConstructor();
	$obj2->copyCon($obj1);
	$obj2->show();
	echo '<br/>'.'<br/>';
	$obj2->name="master";
	$obj2->show();

?>