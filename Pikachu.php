<?php
	class Pikachu extends Pokemon{
		public function __construct($name, $startheatlh){
			$energytype = "Lighting";
			
			parent::__construct($name, $energytype, $startheatlh, $startheatlh);

			$this->attacks[] = new Attack("Electric ring", 50);
			$this->attacks[] = new Attack("Pika Punch", 20);
			$this->resistance = new Resistance("Fighting", 20);
			$this->weakness = new Weakness("Fire", 1.5);
		}
	}