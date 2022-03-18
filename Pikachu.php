<?php
	class Pikachu extends Pokemon{
		public function __construct($name, $hitpoints, $startheatlh){
			$energytype = "Lighting";
			
			parent::__construct($name, $energytype, $hitpoints, $startheatlh);

			$this->attacks[] = new Attack("Electric ring", 50);
			$this->attacks[] = new Attack("Pika Punch", 20);
			$this->resistance = new Resistance("Fighting", 20);
			$this->weakness = new Weakness("Fire", 1.5);
		}
	}