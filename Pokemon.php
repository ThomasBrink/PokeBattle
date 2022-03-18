<?php
	class Pokemon {
		public $name;
		public $energytype;
		public $hitpoints;
		public $startheatlh;
		public $attacks;
		public $resistance;
		public $weakness;

		public function __construct($name, $energytype, $hitpoints, $startheatlh)
    	{
        	$this->name = $name;
        	$this->energytype = $energytype;
        	$this->hitpoints = $hitpoints;
        	$this->startheatlh = $startheatlh;
        	$this->attacks = [];
    	}

    	public function getName(){
    		return $this->name;
    	}

    	public function getEnergyType(){
    		return $this->energytype;
    	}

    	public function displayAttackName(){
    		return $this->attacks[0]->getAttackName();
    	}

    	public function Attack($enemy){
			echo $this->name . " attacks " . $enemy->getName(). " with " . $this->attacks[0]->getAttackName();
			echo "<br>";

			if($this->energytype == $enemy->weakness->weakEnergy){
				$enemy->hitpoints = $enemy->hitpoints - ($this->attacks[0]->getAttackDamage() * $enemy->weakness->weakMulti);
			}
			else{
				$enemy->hitpoints = $enemy->hitpoints - $this->attacks[0]->getAttackDamage();
			}

			if($enemy->hitpoints <= 0){
				echo $enemy->getName . " fainted";
			}
			else{
				echo $enemy->hitpoints . " heatlh left"; 
			}
    	}

    	public function __toString() {
        	return json_encode($this);
    	}
	}