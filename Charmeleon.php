<?php
	class Charmeleon extends Pokemon{
		public function __construct($name, $startheatlh){
			$energytype = "Fire";
			
			parent::__construct($name, $energytype, $startheatlh, $startheatlh);

			$this->attacks[] = new Attack("Head Butt", 10);
			$this->attacks[] = new Attack("Flare", 30);
			$this->resistance = new Resistance("Lighting", 10);
			$this->weakness = new Weakness("Water", 2);
		}
	}