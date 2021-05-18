<?php
	
	class ParaConstructor {
		public $name;
		public $food_type;

		public function __construct() { } //default constructor
		public function Paracon($name,$food_type) // working as copy constructor
		{
			$this->name = $name->name;
			$this->food_type = $food_type->food_type;
		}
		function show() {
			echo "Name = ".$this->name.'\n';
			echo "Food Type = ".$this->food_type;
		}
	}

	$obj1 = new ParaConstructor();
	$obj1->name = 'RCC ';
	$obj1->food_type = 'Saoner';
	$obj1->show();

?>