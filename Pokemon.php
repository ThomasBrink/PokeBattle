<?php
	class Pokemon {
		public $name;
		public $energytype;
		public $hitpoints;
		public $startheatlh;
		public $attacks;

		public function __construct($name, $energytype, $hitpoints, $startheatlh)
    	{
        	$this->name = $name;
        	$this->energytype = $energytype;
        	$this->hitpoints = $hitpoints;
        	$this->startheatlh = $startheatlh;
        	$this->attacks = [];
    	}

    	public function displayName(){
    		echo '<h2>' . $this->name . '</h2>';
    	}

    	public function __toString() {
        	return json_encode($this);
    	}
	}