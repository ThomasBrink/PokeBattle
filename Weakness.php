<?php
	class Weakness{
		public $weakEnergy;
		public $weakMulti;

		public function __construct($weakEnergy, $weakMulti){
			$this->weakEnergy = $weakEnergy;
			$this->weakMulti = $weakMulti;
		}
	}