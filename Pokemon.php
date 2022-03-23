<?php
	class Pokemon {
		protected $name;
		protected $energytype;
		protected $hitpoints;
		protected $startheatlh;
		protected $attacks;
		protected $resistance;
		protected $weakness;
		protected $status;
		protected static $population = 0;

		public function __construct($name, $energytype, $hitpoints, $startheatlh)
    	{
        	$this->name = $name;
        	$this->energytype = $energytype;
        	$this->hitpoints = $hitpoints;
        	$this->startheatlh = $startheatlh;
        	$this->status = "alive";
        	$this->attacks = [];
        	self::$population++;
    	}

    	public function getName(){
    		return $this->name;
    	}

    	public function getEnergyType(){
    		return $this->energytype;
    	}

    	public function getStatus(){
    		return $this->status;
    	}

    	public function getPopulation(){
    		return Pokemon::$population;
    	}

    	public function Attack($enemy){
    		$random = rand(0,1);
    		echo "<br>";

    		echo $this->getName() . " has " . $this->hitpoints . " heatlh" . " and " . $enemy->getName() . " has " . $enemy->hitpoints . " heatlh";

    		echo "<br>";
    		echo "<br>";

			echo $this->name . " attacks " . $enemy->getName(). " with " . $this->attacks[$random]->getAttackName() . " (base dmg: " . $this->attacks[$random]->getAttackDamage() . ")";

			echo "<br>";

			if($this->energytype == $enemy->weakness->weakEnergy){
				$enemy->hitpoints = $enemy->hitpoints - ($this->attacks[$random]->getAttackDamage() * $enemy->weakness->weakMulti);
			}
			else if($this->energytype == $enemy->resistance->resEnergy){
				$enemy->hitpoints = $enemy->hitpoints - ($this->attacks[$random]->getAttackDamage() - $enemy->resistance->resValue);
			}
			else{
				$enemy->hitpoints = $enemy->hitpoints - $this->attacks[$random]->getAttackDamage();
			}

			if($enemy->hitpoints <= 0){
				echo $enemy->getName() . " fainted";
				$enemy->status = "fainted";
				Pokemon::$population--;
			}
			else{
				echo $enemy->hitpoints . " heatlh left"; 
			}
			echo "<br>";
    	}

    	public function __toString() {
        	return json_encode($this);
    	}
	}