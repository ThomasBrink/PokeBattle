<?php
	class Pokemon {
		public $name;
		public $energytype;
		public $hitpoints;
		public $startheatlh;
		public $attack;
		public $weakness;
		public $resistance;

		public function __construct($name, $energytype, $hitpoints, $startheatlh, $attack, $weakness, $resistance)
    	{
        	$this->name = $name;
        	$this->energytype = $energytype;
        	$this->hitpoints = $hitpoints;
        	$this->startheatlh = $startheatlh;
        	$this->attack = $attack;
        	$this->weakness = $weakness;
        	$this->resistance = $resistance;
    	}

    	public function __toString() {
        	return json_encode($this);
    	}
	}